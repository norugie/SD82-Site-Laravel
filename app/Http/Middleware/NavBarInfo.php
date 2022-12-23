<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\Menu;
use Illuminate\Http\Request;

class NavBarInfo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $navbardata = [];
        $navbarprimary = Menu::select('id', 'title', 'type', 'placement', 'content')->where('placement', 'Primary')->with('submenu:menu_id,title,content')->get();
        $navbarsecondary = Menu::select('id', 'title', 'type', 'placement', 'content')->where('placement', 'Secondary')->with('submenu:menu_id,title,content')->get();

        $navbardata['primary'] = $navbarprimary;
        $navbardata['secondary'] = $navbarsecondary;

        $navbar = json_decode(json_encode($navbardata), FALSE);

        View::share('navbardata', $navbar);

        return $next($request);
    }
}
