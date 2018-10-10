<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{

    /**
     * Get all activities of logs
     *
     * @return \Illuminate\Database\Eloquent\Collection|Activity[]
     */
    public function index()
    {
        return Activity::all();
    }
}
