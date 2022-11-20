<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function indexView ()
    {
        $about = Content::where('type', 'Snippet')->where('location', 'about')->first();
        // dd($about);
        return view ('index', 
        [
            'about' => $about
        ]);
    }

    public function pageRouterView (String $page)
    {
        if (\View::exists($page)) {
            return view ($page);
        } else return view ('404');
    }
}
