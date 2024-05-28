<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $projects = Project::take(3)->get();
        $services = Service::take(3)->get();
        return view('landing.index',compact('settings', 'projects', 'services'));
    }
}
