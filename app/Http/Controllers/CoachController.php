<?php

// app/Http/Controllers/CoachController.php
namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        
        $coaches = Coach::paginate(10);

        return view('coaches.index', compact('coaches'));
    }
    public function show(Coach $coach)
    {
        return view('coaches.show', compact('coach'));
    }

    public function create()
    {
        return view('coaches.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:coaches',
        ]);

        Coach::create($validated);

        return redirect()->route('coaches.index')->with('success', 'Coach created successfully.');
    }

    public function edit(Coach $coach)
    {
        return view('coaches.edit', compact('coach'));
    }

    public function update(Request $request, Coach $coach)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:coaches,email,' . $coach->id,
        ]);

        $coach->update($validated);

        return redirect()->route('coaches.index')->with('success', 'Coach updated successfully.');
    }

    public function destroy(Coach $coach)
    {
        $coach->delete();

        return redirect()->route('coaches.index')->with('success', 'Coach deleted successfully.');
    }
}
