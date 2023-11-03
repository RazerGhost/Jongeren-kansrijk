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

class InstituutController extends Controller
{
    public function AddInstituut()
    {
        $Jongeren = Jongere::all();
        return view("", compact("Jongeren"));
    }

    public function StoreInstituut(Request $request): RedirectResponse
    {
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'adres' => 'required',
            'email' => 'required',
            'telefoonnummer' => 'required',
            'jongeren' => 'required',
        ]);

        Instituut::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'adres' => $request->adres,
            'email' => $request->email,
            'telefoonnummer' => $request->telefoonnummer,
            'jongeren' => $request->jongeren,
        ]);

        return redirect()->route('')->with('success', '');
    }

    public function UpdateInstituut(Request $request, $id): RedirectResponse
    {
        $Instituut = Instituut::find($id);

        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'adres' => 'required',
            'email' => 'required',
            'telefoonnummer' => 'required',
            'jongeren' => 'required',
        ]);

        if (!$Instituut) {
            return redirect()->route('')->with('error', '');
        }

        $Instituut->update([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'adres' => $request->adres,
            'email' => $request->email,
            'telefoonnummer' => $request->telefoonnummer,
            'jongeren' => $request->jongeren,
        ]);

        return redirect()->route('')->with('success', '');
    }

    public function DestroyInstituut(Request $request, $id): RedirectResponse
    {
        $Instituut = Instituut::find($id);

        $Instituut->delete();

        return redirect()->route('')->with('success', '');
    }

}
