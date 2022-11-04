<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function indexView ()
    {
        return view ( 'index' );
    }

    public function errorView ()
    {
        return view ( 'error' );
    }

    public function pageRouterView (String $page)
    {

    }
}
