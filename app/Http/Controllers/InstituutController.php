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
    // Function to show the Instituut page
    public function AddInstituut()
    {
        return view("instituut");
    }

    // Function to store a new Instituut
    public function StoreInstituut(Request $request): RedirectResponse
    {
        // Validate the request...
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'adres' => 'required',
            'email' => 'required|email',
            'telefoonnummer' => 'required|numeric',
        ]);
        // Create new Instituut
        Instituut::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'adres' => $request->adres,
            'email' => $request->email,
            'telefoonnummer' => $request->telefoonnummer,
        ]);
        // Redirect to dashboard
        return redirect()->route('dashboard')->with('status', 'success');
    }

    public function EditInstituut($id): View
    {
        $Instituut = Instituut::find($id);

        return view('instituut.edit-instituut', compact('Instituut'));
    }

    public function UpdateInstituut(Request $request, $id): RedirectResponse
    {
        //dd($id, $request->all());

        $Instituut = Instituut::find($id);

        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'adres' => 'required',
            'email' => 'required',
            'telefoonnummer' => 'required',
        ]);

        $Instituut->update([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'adres' => $request->adres,
            'email' => $request->email,
            'telefoonnummer' => $request->telefoonnummer,
        ]);

        return redirect()->route('dashboard')->with('status', 'success');
    }

    public function DestroyInstituut($id): RedirectResponse
    {
        //dd($id);
        $Instituut = Instituut::find($id);

        $Instituut->delete();

        return redirect()->route('dashboard')->with('status', 'success');
    }

}
