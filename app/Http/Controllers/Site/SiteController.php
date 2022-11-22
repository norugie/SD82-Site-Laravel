<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function indexView ()
    {
        $about = Content::where('type', 'Snippet')->where('location', 'about')->where('status', 'Active')->first();
        $slides = Content::where('type', 'Slider')->where('location', 'slider')->where('status', 'Active')->get();
        $news = Post::where('status', 'Active')->latest()->with('user')->take(3)->get();
        // $posts = Post::where('status', 'Active')->get();
        // dd($news);
        return view ('index', 
        [
            'about' => $about,
            'slides' => $slides,
            'news' => $news
        ]);
    }

    public function pageRouterView (String $page)
    {
        if (\View::exists($page)) {
            return view ($page);
        } else return view ('404');
    }
}
