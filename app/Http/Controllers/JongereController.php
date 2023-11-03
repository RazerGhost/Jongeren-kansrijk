<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jongere;

class JongereController extends Controller
{
    public function AddJongere()
    {
        return view('jongere.add');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'geboortedatum' => 'required',
            'telefoonnummer' => 'required',
            'email' => 'required',
            'adres' => 'required',
            'instituut' => 'required',
        ]);

        Jongere::create([
            'voornaam' => $request->voornaam,
            'achternaam' => $request->achternaam,
            'geboortedatum' => $request->geboortedatum,
            'telefoonnummer' => $request->telefoonnummer,
            'email' => $request->email,
            'adres' => $request->adres,
            'instituut' => $request->instituut,
        ]);

        return redirect()->route('')->with('success', '');
    }
}
