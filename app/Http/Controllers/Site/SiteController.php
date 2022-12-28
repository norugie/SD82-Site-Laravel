<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Post;
use App\Models\Resource;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function indexView ()
    {
        $about = Content::select('title', 'banner', 'content')->where('type', 'Snippet')->where('location', 'about')->where('status', 'Active')->first();
        $slides = Content::select('title', 'banner', 'content')->where('type', 'Slider')->where('location', 'slider')->where('status', 'Active')->get();

        return view ('index', 
        [
            'about' => $about,
            'slides' => $slides
        ]);
    }

    public function newsView ()
    {
        return Post::select('id', 'user_id', 'slug', 'title', 'thumbnail', 'desc', 'created_at')->where('status', 'Active')->latest()->with('user:id,firstname,lastname')->with('categories:id,slug,name')->get();
    }

    public function newsViewContent (String $slug)
    {
        return Post::where('slug', $slug)->with('user')->with('categories')->first();
    }

    public function jobsView (String $category)
    {
        $info = Content::where('type', 'Snippet')->where('location', $category)->where('status', 'Active')->first();
        return $info;
    }

    public function eventsView ()
    {

    }

    public function staffView ()
    {
        $contents['about'] = Content::where('type', 'Snippet')->where('location', 'staff')->where('status', 'Active')->first();
        $contents['info'] = Resource::where('location', 'staff')->where('status', 'Active')->get();

        return $contents;
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
            if($page === 'jobs') $function = $page . 'View';
            else {
                $function = $page . 'ViewContent';
                $page = $page . '-read';
            }

            $contents = $this->$function($slug);

            if($page === 'news' ? $title = str_replace('-read', '', $page) : $title = $contents->title);

            return view($page, [
                'page' => $title,
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
