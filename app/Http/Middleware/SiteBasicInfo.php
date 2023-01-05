<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\Department;
use App\Models\Post;
use Illuminate\Http\Request;
use Timegridio\ICalReader\ICalParser;
use Carbon\Carbon;

class SiteBasicInfo
{
    // Calendar Parser
    /**
     * @var ICalEvents
     */
    protected $icalevents;

    protected function getStub()
    {
        $contents = file_get_contents('assets/calendar/calendar.ics');

        return $contents;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $siteData = [];
        
        $cmsd = Department::select('abbv', 'name', 'addr', 'email', 'phone')->where('id', 1)->where('status', 'Active')->first();

        $siteData['abbv'] = $cmsd->abbv;
        $siteData['name'] = $cmsd->name;
        $siteData['address'] = $cmsd->addr;
        $siteData['email'] = $cmsd->email;
        $siteData['phone'] = $cmsd->phone;
        $siteData['posts'] = Post::select('user_id', 'slug', 'title', 'thumbnail', 'desc', 'created_at')->where('status', 'Active')->latest()->with('user:id,firstname,lastname')->take(3)->get();

        $this->parser = new ICalParser();
        $stub = $this->getStub();
        $this->parser->initString($stub);
        $events = $this->parser->events();
        $siteData['events'] = $events;

        $sitedata = json_decode(json_encode($siteData), FALSE);

        // dd($siteData);

        View::share('sitedata', $sitedata);

        return $next($request);
    }
}
