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

class ActivityController extends Controller
{

    public function StoreActivity(Request $request): RedirectResponse
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'location' => 'required',
            'add_jongeren' => 'required',
        ]);

        Activity::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'jongeren' => $request->add_jongeren,
        ]);

        return redirect()->route('dashboard')->with('status', 'added');
    }

    public function UpdateActivity(Request $request, $id): RedirectResponse
    {
        $Activity = Activity::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'location' => 'required',
        ]);

        if (!$Activity) {
            return redirect()->route('dashboard')->with('status', 'error');
        }

        $Activity->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'jongeren' => $request->input("edit_jongeren_{$Activity->id}"),
        ]);

        return redirect()->route('dashboard')->with('status','edited');
    }

    public function DestroyActivity($id): RedirectResponse
    {
        $Activity = Activity::find($id);

        if (!$Activity) {
            return redirect()->route('dashboard')->with('status', 'error');
        }

        $Activity->delete();

        return redirect()->route('dashboard')->with('status', 'deleted');
    }

}
