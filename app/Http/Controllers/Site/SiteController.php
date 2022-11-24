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

    public function newsView ()
    {
        return Post::where('status', 'Active')->latest()->with('user')->with('categories')->get();
    }

    public function newsViewContent (String $slug)
    {
        return "future specific content here";
    }

    public function careersView (String $category)
    {
        
    }

    public function careersViewContent (String $slug)
    {

    }

    public function eventsView ()
    {

    }

    public function eventsViewContent (String $slug)
    {

    }

    public function pageView ()
    {

    }

    public function pageViewContent (String $slug)
    {

    }

    public function mainContentPageRouterView (String $page)
    {
        if (\View::exists($page)) {
            $function = $page . 'View';
            $contents = $this->$function();
            
            return view($page, [
                'page' => $page,
                'contents' => $contents
            ]);
        } else return view ('404');
    }

    public function subContentPageRouterView (String $page, String $slug)
    {
        if (\View::exists($page)) {
            if($page === 'careers') $function = $page . 'View';
            else {
                $function = $page . 'ViewContent';
                $page = $page . '-read';
            }

            $contents = $this->$function($slug);
            
            return view($page, [
                'page' => str_replace('-read', '', $page),
                'contents' => $contents
            ]);
        } else return view ('404');
    }

    public function subContentInCategoryPageRouterView (String $page, String $category, String $slug)
    {
        if (\View::exists($page)) {
            $function = $page . 'ViewContent';
            $contents = $this->$function($slug);

            return view($page . '-read', [
                'page' => $page,
                'contents' => $contents
            ]);
        } else return view ('404');
    }
}
