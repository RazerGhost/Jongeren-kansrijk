<?php

namespace App\Http\Controllers;
#Laravel Imports
use Illuminate\Http\Request;
use Illuminate\View\View;
# Model Imports
use App\Models\Activiteit;
use App\Models\Jongere;
use App\Models\Instituut;

class ViewController extends Controller
{
    public function index(): View
    {
        $Activiteiten = Activiteit::all();
        $ActCount = Activiteit::count();
        $Jongeren = Jongere::all();
        $JongCount = Jongere::count();
        $Instituten = Instituut::all();
        $InstCount = Instituut::count();
        return view("dashboard", compact("Activiteiten", "Jongeren", "Instituten", "ActCount", "JongCount", "InstCount"));
    }
}
