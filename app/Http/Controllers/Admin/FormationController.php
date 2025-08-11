<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Http\Requests\Admin\FormationRequest;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('admin.formation.index', [
            'formations' => Formation::orderby('created_at', 'desc')->paginate(25)
        ]);
    }

    public function create()
    {
        $formations = new Formation();
        $formations->fill([
            'statut' => 'participant'
        ]);
        return view('admin.formation.formulaire', [
                    'formations' => $formations
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormationRequest $request)
    {
        $formations = Formation::create([
            'nom'  =>$request->nom,
            'email'  =>$request->email,
            'numero_whatsapp'  =>$request->numero_whatsapp,
            'niveau'  =>$request->niveau,
            'domaine'  =>$request->domaine,
            'message'  =>$request->message,
           
        ]);
        return to_route('admin.formation.index')->with('success', 'Cet utilisateur a bien été ajouté avec succès');
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
    public function edit(Formation $formation)
    {
        return view('admin.formation.formulaire', [
            'formation' => $formation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formation $formation)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'numero_whatsapp' => 'required',
            'niveau' => 'required',
            'domaine' => 'required',
            'message' => 'required',
        ]);

        $formation->update($validatedData);

        return redirect()->route('admin.formation.index')->with('success', 'Cet enregistrement a été modifié');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
        $formation->delete();

        return redirect()->route('admin.formation.index')->with('success', 'Cet enregistrement a été supprimé avec succès');
    }
}
