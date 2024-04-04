<?php

namespace App\Http\Controllers;

use App\Models\Infrastructure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('infraestructures');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request):RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->chirps()->create($validated);

        return redirect(route('chirps.index'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Infrastructure $infrastructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Infrastructure $infrastructure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Infrastructure $infrastructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infrastructure $infrastructure)
    {
        //
    }
}
