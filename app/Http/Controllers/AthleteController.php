<?php

// app/Http/Controllers/AthleteController.php
namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Coach;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    public function index()
    {
        $athletes = Athlete::with('coach')->get();
        return view('athletes.index', compact('athletes'));
    }

    public function create()
    {
        $coaches = Coach::all();
        return view('athletes.create', compact('coaches'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'coach_id' => 'required|exists:coaches,id',
        ]);

        Athlete::create($validated);

        return redirect()->route('athletes.index')->with('success', 'Athlete created successfully.');
    }

    public function edit(Athlete $athlete)
    {
        $coaches = Coach::all();
        return view('athletes.edit', compact('athlete', 'coaches'));
    }

    public function update(Request $request, Athlete $athlete)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'coach_id' => 'required|exists:coaches,id',
        ]);

        $athlete->update($validated);

        return redirect()->route('athletes.index')->with('success', 'Athlete updated successfully.');
    }

    public function destroy(Athlete $athlete)
    {
        $athlete->delete();

        return redirect()->route('athletes.index')->with('success', 'Athlete deleted successfully.');
    }
}
