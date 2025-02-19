<?php

namespace App\Http\Controllers;

use App\Models\Recomendation;
use App\Models\Wisata;
use Illuminate\Http\Request;

class RecomendationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recomendations = Recomendation::latest()->get();
        return view('admin.recomendation.index', compact('recomendations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vacations = Wisata::latest()
            ->whereDoesntHave('recomendation')
            ->get(['id', 'judul']);

        return view('admin.recomendation.create', compact('vacations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'recomendation' => ['required', 'exists:wisatas,id']
        ]);

        Recomendation::create(['wisata_id' => $validated['recomendation']]);

        return redirect()->route('admin.recomendation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recomendation $recomendation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recomendation $recomendation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recomendation $recomendation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recomendation $recomendation)
    {
        $recomendation->delete();
        return redirect()->route('admin.recomendation.index');
    }
}
