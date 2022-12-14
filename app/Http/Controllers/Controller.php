<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Log;
use Carbon\Carbon;
use Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Handle process for logging activity
     *
     * @param Int $user
     * @param Int $department
     * @param String $description
     */
    public function inputLog(Int $user, String $description)
    {
        $log = new Log();
        $log->slug = 'LOG' . rand(1111111111,9999999999);
        $log->desc = $description;
        $log->user_id = $user;
        $log->save();
    }

    /**
     * Return data for /dashboard page
     * 
     */
    public function requestLog ()
    {
        // Initialize Log object
        $log = new Log();

        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();

        // Displayed logs only show logs from the last 30 days
        return $log->whereBetween("created_at", [$startDate, $endDate])
                ->orderBy('created_at', 'DESC')
                ->get();
    }

    /**
     * Handle process for SweetAlert after-process alerts
     *
     * @param String $type
     * @param String $message
     */
    public function alertDetails (String $message, String $type)
    {
        switch($type){
            case 'create_success':
                Alert::html('Success', $message, 'success')
                    ->persistent(true)
                    ->showCloseButton()
                    ->showCancelButton('CLOSE', '#607d8b');
                break;
            case 'error':
                Alert::error('Something went wrong...', $message)
                    ->showCloseButton();
                break;
            default:
                Alert::html('Success', $message, $type)
                    ->showCloseButton();
        }
    }
}
