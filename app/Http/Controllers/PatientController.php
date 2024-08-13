<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserHeartRate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    // Patients
    public function index()
    {
        $users = DB::table('users')->get();
        return view('patients', ['users' => $users]);
    }

    // Patient details
    public function patientDetail(Request $request)
    {
        $id = $request->id;
        // Patient data
        $patientData = User::with('latestHeartRate')->find($id);
        // dd($patientData);
        $admintted_date = Carbon::parse($patientData->created_date)
            ->setTimezone('Asia/Kolkata')
            ->format('d M Y, h:i A');


        return view('patient_details', [
            'data' => $patientData,
            'admintted_date' => $admintted_date,
        ]);
    }

    public function patientInfo(Request $request)
    {
        // Fetch data for the last 7 days
        $sevenDaysAgo = Carbon::now()->subDays(7);
        $lastWeekData = UserHeartRate::where('user_id', $request->id)
            ->where('created_date', '>=', $sevenDaysAgo)
            ->get();
        $dailyAverages = $lastWeekData->groupBy(function ($date) {
            return Carbon::parse($date->created_date)->timezone('Asia/Kolkata')->format('Y-m-d');
        })->map(function ($day) {
            return $day->avg('value'); // assuming 'value' is the column you want to average
        });

        $data = $dailyAverages->map(function ($avg, $date) {
            return ['date' => $date, 'value' => $avg];
        })->values()->all();


        // Fetch data for the last 7 minutes
        $sevenMinutesAgo = Carbon::now()->subMinutes(7);

        $measurements = UserHeartRate::where('created_date', '>=', $sevenMinutesAgo)->get();

        // Group by minute and calculate the minute-wise average
        $minuteAverages = $measurements->groupBy(function ($date) {
            return Carbon::parse($date->reading_time)->timezone('Asia/Kolkata')->format('H:i');
        })->map(function ($minute) {
            return $minute->avg('value'); // assuming 'value' is the column you want to average
        });

        // Format the result into an array of arrays
        $dataLast7min = $minuteAverages->map(function ($avg, $minute) {
            return ['time' => $minute, 'value' => $avg];
        })->values()->all();

        return view('patient_info', ['data' => $data, 'dataLast7min' => $dataLast7min]);
    }
}
