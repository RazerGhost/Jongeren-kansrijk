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
    public function AddActiviteit(): View
    {
        $Activiteiten = Activiteit::all();
        $Jongeren = Jongere::all();
        $Instituten = Instituut::all();
        return view("", compact("Activiteiten"));
    }

    public function StoreActiviteit(Request $request): RedirectResponse
    {
        //dd($request->all());
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'datum' => 'required',
            'locatie' => 'required',
            'add_jongeren' => 'required',
        ]);

        Activiteit::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'datum' => $request->datum,
            'locatie' => $request->locatie,
            'jongeren' => $request->add_jongeren,
        ]);

        return redirect()->route('dashboard')->with('status', 'added');
    }

    public function UpdateActiviteit(Request $request, $id): RedirectResponse
    {
        $Activiteit = Activiteit::find($id);

        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'datum' => 'required',
            'locatie' => 'required',
            'edit_jongeren' => 'required',
        ]);

        if (!$Activiteit) {
            return redirect()->route('')->with('status', 'error');
        }

        $Activiteit->update([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'datum' => $request->datum,
            'locatie' => $request->locatie,
            'jongeren' => $request->edit_jongeren,
        ]);

        return redirect()->route('')->with('status','edited');
    }

    public function DestroyActiviteit($id): RedirectResponse
    {
        $Activiteit = Activiteit::find($id);

        if (!$Activiteit) {
            return redirect()->route('dashboard')->with('status', 'error');
        }

        $Activiteit->delete();

        return redirect()->route('dashboard')->with('status', 'deleted');
    }

}
