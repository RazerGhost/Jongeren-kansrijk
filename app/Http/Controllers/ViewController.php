<?php

namespace App\Http\Controllers;
#Laravel Imports
use Illuminate\Http\Request;
use Illuminate\View\View;
# Model Imports
use App\Models\Activity;
use App\Models\Jongere;
use App\Models\Institute;

class ViewController extends Controller
{
    public function index(): View
    {
        $Activities = Activity::all();
        $ActCount = Activity::count();
        $Jongeren = Jongere::all();
        $JongCount = Jongere::count();
        $Institutes = Institute::all();
        $InstCount = Institute::count();
        return view("dashboard", compact("Activities", "Jongeren", "Institutes", "ActCount", "JongCount", "InstCount"));
    }
}
