<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activity = ActivityLog::all();
        return view('admin.pages.activity.index',['activities'=>$activity]);
    }
}
