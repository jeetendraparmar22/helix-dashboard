<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserWatch;
use App\Traits\ApiResponceTrait;
use Illuminate\Support\Carbon;

class PatientController extends Controller
{
    use ApiResponceTrait;

    // Patients data 
    public function patientData()
    {
        try {
            // dd(User::with('latestBatteryPercentage')->find(3));
            // Patient data
            $patientData = User::join('user_watch', 'users.id', '=', 'user_watch.user_id')
                ->select('users.*', 'user_watch.updated_date', 'user_watch.connection_status')
                ->orderBy('user_watch.updated_date', 'desc')
                ->with('watchData:user_id,updated_date,connection_status')
                ->with('latestBatteryPercentage')
                ->get();


            // dd($patientData);
            $patientData->each(function ($user) {

                $user->updated_date_ist = Carbon::parse($user->updated_date)
                    ->setTimezone('Asia/Kolkata')
                    ->format('h:i A');
            });

            return ApiResponceTrait::success($patientData);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
