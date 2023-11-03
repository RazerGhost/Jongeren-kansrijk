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
        $Jongeren = Jongere::all();
        $Instituten = Instituut::all();
        return view("dashboard", compact("Activiteiten", "Jongeren", "Instituten"));
    }
}
