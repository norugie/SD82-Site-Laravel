<?php

namespace App\Http\Controllers;

use App\TokenStore\TokenCache;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin()
    {
        // Initialize the OAuth client
        $oauthClient = new \League\OAuth2\Client\Provider\GenericProvider([
            'clientId'                => config('azure.appId'),
            'clientSecret'            => config('azure.appSecret'),
            'redirectUri'             => config('azure.redirectUri'),
            'urlAuthorize'            => config('azure.authority') . config('azure.authorizeEndpoint'),
            'urlAccessToken'          => config('azure.authority') . config('azure.tokenEndpoint'),
            'urlResourceOwnerDetails' => '',
            'scopes'                  => config('azure.scopes')
        ]);

        $authUrl = $oauthClient->getAuthorizationUrl();

        // Save client state so we can validate in callback
        session(['oauthState' => $oauthClient->getState()]);

        // Redirect to AAD signin page
        return redirect()->away($authUrl);
    }

    public function callback(Request $request)
    {
        // Validate state
        $expectedState = session('oauthState');
        $request->session()->forget('oauthState');
        $providedState = $request->query('state');

        if (!isset($expectedState)) {
            // If there is no expected state in the session,
            // do nothing and redirect to the home page.
            return redirect('/cms/dashboard');
        }

        if (!isset($providedState) || $expectedState != $providedState) {
            return redirect('/error')
                ->with('error', 'Invalid auth state')
                ->with('errorDetail', 'The provided auth state did not match the expected value');
        }

        // Authorization code should be in the "code" query param
        $authCode = $request->query('code');
        if (isset($authCode)) {
            // Initialize the OAuth client
            $oauthClient = new \League\OAuth2\Client\Provider\GenericProvider([
                'clientId'                => config('azure.appId'),
                'clientSecret'            => config('azure.appSecret'),
                'redirectUri'             => config('azure.redirectUri'),
                'urlAuthorize'            => config('azure.authority') . config('azure.authorizeEndpoint'),
                'urlAccessToken'          => config('azure.authority') . config('azure.tokenEndpoint'),
                'urlResourceOwnerDetails' => '',
                'scopes'                  => config('azure.scopes')
            ]);

            try {
                // Make the token request
                $accessToken = $oauthClient->getAccessToken('authorization_code', [
                    'code' => $authCode
                ]);

                $graph = new Graph();
                $graph->setAccessToken($accessToken->getToken());

                $user = $graph->createRequest('GET', '/me?$select=displayName,givenName,surname,mail,department,id,userPrincipalName')
                    ->setReturnType(Model\User::class)
                    ->execute(); // Get O365 logged in user
                $groups = $graph->createCollectionRequest('GET', '/me/memberOf')
                    ->setReturnType(Model\Group::class)
                    ->execute(); // Get O365 logged in user group list
                $gs = array();

                foreach ($groups as $group) :
                    array_push($gs, $group->getDisplayName());
                endforeach;

                if (in_array('WebAccess', $gs) ? $redirect = '/cms/dashboard' : $redirect = '/restricted');

                // Upsert user into the users table
                User::upsert(
                    [
                        'username' => str_replace("@cmsd.bc.ca", "", $user->getMail()),
                        'firstname' => $user->getGivenname(),
                        'lastname' => $user->getSurname(),
                        'email' => $user->getMail()
                    ],
                    ['username' => str_replace("@cmsd.bc.ca", "", $user->getMail())]
                );

                $id = User::where('username', str_replace("@cmsd.bc.ca", "", $user->getMail()))->value('id');
                // if(in_array($department, [3, 4, 5, 6]) ? $school = $department : $school = 2);

                $tokenCache = new TokenCache();
                $tokenCache->storeTokens($accessToken, $user, $id);

                return redirect($redirect);
            } catch (League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
                return redirect('/error')
                    ->with('error', 'Error requesting access token')
                    ->with('errorDetail', $e->getMessage());
            }
        }

        return redirect('/error')
            ->with('error', $request->query('error'))
            ->with('errorDetail', $request->query('error_description'));
    }

    public function signout()
    {
        $tokenCache = new TokenCache();
        $tokenCache->clearTokens();
        return view('signout');
    }
}
