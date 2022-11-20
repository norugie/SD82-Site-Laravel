<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Posts;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function indexView ()
    {
        $about = Content::where('type', 'Snippet')->where('location', 'about')->where('status', 'Active')->first();
        $slides = Content::where('type', 'Slider')->where('location', 'slider')->where('status', 'Active')->get();
        // $posts = Post::where('status', 'Active')->get();
        // dd($about);
        return view ('index', 
        [
            'about' => $about,
            'slides' => $slides
        ]);
    }

    public function pageRouterView (String $page)
    {
        if (\View::exists($page)) {
            return view ($page);
        } else return view ('404');
    }
}
