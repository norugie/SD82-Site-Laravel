<?php

use Illuminate\Support\Facades\Route;

// Auth Controller
use App\Http\Controllers\AuthController;

// Base Controllers
use App\Http\Controllers\General\DashboardController;

// ***-- Posts Controllers --*** //
// Posts
use App\Http\Controllers\Posts\PostController;

// Links
use App\Http\Controllers\Posts\LinkController;

// Links
use App\Http\Controllers\Posts\CategoryController;

// ***-- District Controllers --*** //

// ***-- Sections Controllers --*** //

// Miscellaneous Controllers
use App\Http\Controllers\General\FileUploadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Web routes for the SD92 District Website(s). These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
| Please refrain from rearranging the order of the routes as it
| could affect some of the functionalities.
|
*/

Route::controller('AuthController')->group(function(){
    Route::get('/signin', 'signin');
    Route::get('/callback', 'callback');
    Route::get('/signout', 'signout');    
});

Route::group(['middleware' => ['navbar', 'siteinfo']], function(){
    Route::controller('Site\SiteController')->group(function(){
        Route::get('/', 'indexView');
        Route::get('/news', 'newsView');
        Route::get('/news/{slug}', 'newsViewContent');
        // Route::get('/{page}', 'mainContentPageRouterView');
        // Route::get('/{page}/{slug}', 'subContentPageRouterView');
        // Route::get('/{page}/{category}/{slug}', 'subContentInCategoryPageRouterView');
    });
});

Route::group(['middleware' => 'authAD', 'prefix' => 'cms'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::group(['prefix' => 'posts'], function(){
        Route::controller('Posts\PostController')->group(function(){
            Route::group(['prefix' => 'posts'], function(){
                Route::get('/', 'postsIndex');
                Route::get('/{slug}/view', 'postsViewPost');
                Route::get('/create', 'postsCreateNewPostPage');
                Route::post('/create', 'postsCreateNewPost');

                // View Post Reroute
                Route::get('/{slug}', function ( String $slug ) { return redirect('/cms/posts/posts/' . $slug . '/view'); });
            });
        });

        Route::controller('Posts\LinkController')->group(function(){
            Route::get('/links', 'linksIndex');
        });

        Route::controller('Posts\CategoryController')->group(function(){
            Route::get('/categories', 'categoriesIndex');
        });
    });

    Route::controller('FileUploadController')->group(function(){
        Route::post('/upload/{type}', 'uploadImage');
        Route::post('/delete/{type}', 'deleteImage');
    });
});
