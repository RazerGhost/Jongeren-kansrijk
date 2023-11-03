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

class ActiviteitController extends Controller
{
    public function AddAct(): View
    {
        $Activiteiten = Activiteit::all();
        $Jongeren = Jongere::all();
        $Instituten = Instituut::all();
        return view("", compact("Activiteiten"));
    }

    public function Store(Request $request): RedirectResponse
    {
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'adres' => 'required',
            'datum' => 'required',
            'jongeren' => 'required',
        ]);

        Activiteit::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'adres' => $request->adres,
            'datum' => $request->datum,
            'jongeren' => $request->jongeren,
        ]);

        return redirect()->route('')->with('success', '');
    }

    public function UpdateAct(Request $request, $id): RedirectResponse
    {
        $Activiteit = Activiteit::find($id);

        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'adres' => 'required',
            'datum' => 'required',
            'jongeren' => 'required',
        ]);

        if (!$Activiteit) {
            return redirect()->route('')->with('error', '');
        }

        $Activiteit->update([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'adres' => $request->adres,
            'datum' => $request->datum,
            'jongeren' => $request->jongeren,
        ]);

        return redirect()->route('')->with('success','');
    }

    public function DestroyAct(Request $request, $id): RedirectResponse
    {
        $Activiteit = Activiteit::find($id);

        if (!$Activiteit) {
            return redirect()->route('')->with('error', '');
        }

        $Activiteit->delete();

        return redirect()->route('')->with('success', '');
    }
}
