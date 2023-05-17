<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passengers = Passenger::all();

        return view('passenger.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('passenger.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'code' => 'required|unique:passengers',
            'dni' => 'required|unique:passengers',
        ]);

        Passenger::create($request->all());

        return redirect()->route('passenger.index')->with('success', 'Passenger created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Passenger $passenger)
    {
        return view('passenger.show', compact('passenger'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passenger $passenger)
    {
        return view('passenger.edit', compact('passenger'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Passenger $passenger)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'code' => 'required|unique:passengers,code,' . $passenger->id,
            'dni' => 'required|unique:passengers,dni,' . $passenger->id,
        ]);

        $passenger->update($request->all());

        return redirect()->route('passenger.index')->with('success', 'Passenger updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passenger $passenger)
    {
        $passenger->delete();

        return redirect()->route('passenger.index')->with('success', 'Passenger deleted successfully.');
    }
}
