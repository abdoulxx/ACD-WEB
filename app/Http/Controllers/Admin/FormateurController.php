<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expert;
use App\Http\Requests\Admin\ExpertRequest;

class FormateurController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.formateur.index', [
            'formateurs' => Expert::orderby('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formateurs = new Expert();
        $formateurs->fill([
            'statut' => 'participant'
        ]);
        return view('admin.formateur.formulaire', [
                    'formateurs' => $formateurs
        ]);
    }

   /**
     * Store a newly created resource in storage.
     */
    public function store(FormateurRequest $request)
    {
        $formateurs = Expert::create([
            'nom'  =>$request->nom,
            'email'  =>$request->email,
            'prenom'  =>$request->prenom,
            'cv'  =>$request->cv,
            'whatsapp'  =>$request->whatsapp,
        ]);
        return to_route('admin.formateur.index')->with('success', 'Cet utilisateur a bien été ajouté avec succès');
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
    public function edit(Expert $formateur)
    {
        return view('admin.formateur.formulaire', [
            'formateur' => $formateur
        ]);
    }

   /**
 * Update the specified resource in storage.
 */
public function update(Request $request, Expert $formateur)
{
    $validatedData = $request->validate([
        'nom' => 'required',
        'email' => 'required|email',
        'prenom' => 'required',
        'cv' => 'required|mimes:pdf',
        'whatsapp' => 'required',
    ]);

    // Gérer l'upload du CV
    if ($request->hasFile('cv')) {
        $cvFile = $request->file('cv');
        $cvFileName = time() . '_' . $cvFile->getClientOriginalName();
        $cvPath = public_path('uploads/cv');
        $cvFile->move($cvPath, $cvFileName);
        
        // Mettre à jour le nom du fichier dans les données validées
        $validatedData['cv'] = $cvFileName;
    }

    $formateur->update($validatedData);

    return redirect()
        ->route('admin.formateur.index')
        ->with('success', 'Cet enregistrement a été modifié');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expert $formateur)
    {
        $formateur->delete();

        return redirect()->route('admin.formateur.index')->with('success', 'Cet enregistrement a été supprimé avec succès');
    }
}
