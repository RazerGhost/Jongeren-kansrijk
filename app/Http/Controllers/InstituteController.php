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

class InstituteController extends Controller
{
    // Function to show the Institute page
    public function AddInstitute()
    {
        return view("institute");
    }

    // Function to store a new Institute
    public function StoreInstitute(Request $request): RedirectResponse
    {
        // Validate the request...
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:institutes',
            'phonenumber' => 'required|numeric',
        ]);
        // Create new Institute
        Institute::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
        ]);
        // Redirect to dashboard
        return redirect()->route('dashboard')->with('status', 'added');
    }

    public function UpdateInstitute(Request $request, $id): RedirectResponse
    {
        //dd($id, $request->all());

        $Institute = Institute::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
        ]);

        if (!$Institute) {
            return redirect()->route('dashboard')->with('status', 'error');
        }

        $Institute->update([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
        ]);

        return redirect()->route('dashboard')->with('status', 'edited');
    }

    public function DestroyInstitute($id): RedirectResponse
    {
        //dd($id);
        $Institute = Institute::find($id);

        if (!$Institute) {
            return redirect()->route('dashboard')->with('status', 'error');
        }

        $Institute->delete();

        return redirect()->route('dashboard')->with('status', 'deleted');
    }

}
