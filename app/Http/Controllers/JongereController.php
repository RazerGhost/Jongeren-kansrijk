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
        return view("Jongere.add-Jongere", compact("Instituten"));
    }

    public function StoreJongere(Request $request)
    {
        $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'geboortedatum' => 'required',
            'adres' => 'required',
            'telefoonnummer' => 'required',
            'email' => 'required|email|unique:jongeren',
            'add_instituut' => 'required',
        ]);
        // dd($request->all());
        Jongere::create([
            'voornaam' => $request->voornaam,
            'achternaam' => $request->achternaam,
            'geboortedatum' => $request->geboortedatum,
            'adres' => $request->adres,
            'telefoonnummer' => $request->telefoonnummer,
            'email' => $request->email,
            'instituut' => $request->add_instituut,
        ]);

        return redirect()->route('dashboard')->with('status', 'added');
    }

    public function EditJongere($id): View
    {
        $Jongere = Jongere::find($id);

        return view('Jongere.edit-Jongere', compact('Jongere'));
    }

    public function UpdateJongere(Request $request, $id): RedirectResponse
    {
        $Jongere = Jongere::find($id);

        $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'geboortedatum' => 'required',
            'telefoonnummer' => 'required',
            'email' => 'required|email',
            'adres' => 'required',
            'edit_instituut' => 'required',
        ]);

        if (!$Jongere) {
            return redirect()->route('dashboard')->with('status', 'error');
        }

        $Jongere->update([
            'voornaam' => $request->voornaam,
            'achternaam' => $request->achternaam,
            'geboortedatum' => $request->geboortedatum,
            'telefoonnummer' => $request->telefoonnummer,
            'email' => $request->email,
            'adres' => $request->adres,
            'instituut' => $request->edit_instituut,
        ]);

        return redirect()->route('')->with('status', 'edited');
    }

    public function DestroyJongere($id): RedirectResponse
    {
        $Jongere = Jongere::find($id);

        if (!$Jongere) {
            return redirect()->route('dashboard')->with('status', 'error');
        }

        $Jongere->delete();

        return redirect()->route('dashboard')->with('status', 'deleted');
    }
}
