<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function indexView ()
    {
        return view ('index');
    }

    public function pageRouterView (String $page)
    {
        if (\View::exists($page)) {
            return view ($page);
        } else return view ('404');
    }
}
