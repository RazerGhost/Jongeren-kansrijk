<?php

namespace App\Http\Controllers;
#Laravel Imports
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
# Model Imports
use App\Models\Activity;
use App\Models\Jongere;
use App\Models\Institute;

class JongereController extends Controller
{

    public function StoreJongere(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email|unique:jongeren',
            'add_instituut' => 'required',
        ]);
        // dd($request->all());
        Jongere::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'dob' => $request->dob,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'institute' => $request->add_instituut,
        ]);

        return redirect()->route('dashboard')->with('status', 'added');
    }

    public function UpdateJongere(Request $request, $id): RedirectResponse
    {
        $Jongere = Jongere::find($id);

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'dob' => 'required',
            'phonenumber' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        if (!$Jongere) {
            return redirect()->route('dashboard')->with('status', 'error');
        }

        $Jongere->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'dob' => $request->dob,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'address' => $request->address,
            'institute' => $request->input("edit_instituut_{$Jongere->id}"),
        ]);

        return redirect()->route('dashboard')->with('status', 'edited');
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
