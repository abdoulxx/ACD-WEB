<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forum;
use App\Http\Requests\Admin\ForumRequest;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.forum.index', [
            'forums' => Forum::orderby('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $forum = new Forum();
        $forum->fill([
            'statut' => 'participant'
        ]);
        return view('admin.forum.formulaire', [
                    'forum' => $forum
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ForumRequest $request)
    {
        $forum = Forum::create([
            'nom'  =>$request->nom,
            'email'  =>$request->email,
            'fonction'  =>$request->fonction,
            'statut'  =>$request->statut,
            'numero_whatsapp'  =>$request->numero_whatsapp,
            'entreprise'  =>$request->entreprise,
        ]);
        return to_route('admin.forum.index')->with('success', 'Cet utilisateur a bien été ajouté avec succès');
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
    public function edit(Forum $forum)
    {
        return view('admin.forum.formulaire', [
            'forum' => $forum
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'fonction' => 'required',
            'statut' => 'required',
            'numero_whatsapp' => 'required',
            'entreprise' => 'required',
        ]);

        $forum->update($validatedData);

        return redirect()->route('admin.forum.index')->with('success', 'Cet enregistrement a été modifié');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();

        return redirect()->route('admin.forum.index')->with('success', 'Cet enregistrement a été supprimé avec succès');
    }

}
