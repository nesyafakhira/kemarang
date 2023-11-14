<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Traits\LogsActivity;

class LoggingController extends Controller
{
    public function index()
    {
        $activities = Activity::with('causer')->get();


        return view('admin.logging.index', compact('activities'));
    }

}
