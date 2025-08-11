<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prix;
use App\Http\Requests\Admin\PrixRequest;

class PrixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.prix.index', [
            'prices' => Prix::orderby('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prix = new Prix();
        $prix->fill([
            'statut' => 'participant'
        ]);
        return view('admin.prix.formulaire', [
            'prix' => $prix
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrixRequest $request)
    {
        $prix = Prix::create([
            'nom'  =>$request->nom,
            'email'  =>$request->email,
            'fonction'  =>$request->fonction,
            'statut'  =>$request->statut,
            'numero_whatsapp'  =>$request->numero_whatsapp,
            'entreprise'  =>$request->entreprise,
        ]);
        return to_route('admin.prix.index')->with('success', 'Cet utilisateur a bien été ajouté avec succès');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prix $prix)
    {
        return view('admin.prix.formulaire', [
            'prix' => $prix
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prix $prix)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'fonction' => 'required',
            'statut' => 'required',
            'numero_whatsapp' => 'required',
            'entreprise' => 'required',
        ]);

        $prix->update($validatedData);

        return redirect()->route('admin.prix.index')->with('success', 'Cet enregistrement a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prix $prix)
    {
        $prix->delete();

        return redirect()->route('admin.prix.index')->with('success', 'Cet enregistrement a été supprimé avec succès');
    }
}
