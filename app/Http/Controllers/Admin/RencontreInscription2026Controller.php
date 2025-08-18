<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RencontreInscription2026;
use Illuminate\Http\Request;

class RencontreInscription2026Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = RencontreInscription2026::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.rencontre_inscriptions.index', compact('inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(RencontreInscription2026 $rencontreInscription)
    {
        return view('admin.rencontre_inscriptions.show', ['inscription' => $rencontreInscription]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RencontreInscription2026 $rencontreInscription)
    {
        return view('admin.rencontre_inscriptions.edit', ['inscription' => $rencontreInscription]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RencontreInscription2026 $rencontreInscription)
    {
        $validatedData = $request->validate([
            'nom_prenom' => 'required|string|max:255',
            'entreprise' => 'nullable|string|max:255',
            'fonction' => 'nullable|string|max:255',
            'pack_choisi' => 'required|string|in:standard,premium',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $rencontreInscription->update($validatedData);

        return redirect()->route('admin.rencontre-inscriptions.index')->with('success', 'Inscription mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RencontreInscription2026 $rencontreInscription)
    {
        $rencontreInscription->delete();
        return redirect()->route('admin.rencontre-inscriptions.index')->with('success', 'Inscription supprimée avec succès.');
    }
}