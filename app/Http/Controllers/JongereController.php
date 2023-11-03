<?php

namespace App\Http\Controllers;
#Laravel Imports
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
# Model Imports
use App\Models\Activiteit;
use App\Models\Jongere;
use App\Models\Instituut;

class JongereController extends Controller
{
    public function AddJongere(): View
    {
        $Instituten = Instituut::all();
        return view("", compact("Instituten"));
    }

    public function StoreJongere(Request $request)
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

    public function UpdateJongere(Request $request, $id): RedirectResponse
    {
        $Jongere = Jongere::find($id);

        $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'geboortedatum' => 'required',
            'telefoonnummer' => 'required',
            'email' => 'required',
            'adres' => 'required',
            'instituut' => 'required',
        ]);

        if (!$Jongere) {
            return redirect()->route('')->with('error', '');
        }

        $Jongere->update([
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

    public function DestroyJongere(Request $request, $id): RedirectResponse
    {
        $Jongere = Jongere::find($id);

        $Jongere->delete();

        return redirect()->route('')->with('success', '');
    }
}
