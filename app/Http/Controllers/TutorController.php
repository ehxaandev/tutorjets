<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutors = Tutor::all();
        return inertia('Tutors/Index', compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Tutors/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'father_or_husband_name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutors',
            'gender' => 'required|in:Male,Female,Other',
            'contact_number_1' => 'required|string|max:15',
            'current_city' => 'required|string|max:255',
            'residential_address' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'teaching_experience' => 'required|string|max:255',
            'tuition_duration' => 'required|string|max:255',
            'minimum_monthly_fee_home' => 'required|string|max:255',
            'currency' => 'required|string|max:255',
            'minimum_monthly_fee_online' => 'required|string|max:255',
            'specialties' => 'required|string|max:255',
            'home_tuition_type' => 'required|string|max:255',
            'referral_source' => 'required|string|max:255',
            'date_of_birth' => 'required'
        ]);
        Tutor::create($validated);

        return redirect()->route('tutors.index')->with('success', 'Tutor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutor $tutor)
    {
        return inertia('Tutors/Edit', compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tutor $tutor)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:tutors,email,' . $tutor->id,
            'gender' => 'required|in:Male,Female,Other',
            'contact_number_1' => 'required|string|max:15',
            'current_city' => 'required|string|max:255'
        ]);

        $tutor->update($validated);

        return redirect()->route('tutors.index')->with('success', 'Tutor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutor $tutor)
    {
        $tutor->delete();

        return redirect()->route('tutors.index')->with('success', 'Tutor deleted successfully.');
    }
}
