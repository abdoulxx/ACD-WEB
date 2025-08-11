<?php

namespace App\Http\Controllers\Admin;

use App\Models\EventAVenir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EventAVenirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.events.avenir.index', [
            'events' => EventAVenir::orderby('created_at', 'desc')->paginate(6)
        ]);
    }


    public function create()
    {
        return view('admin.events.avenir.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'slug' => 'required|unique:evenement_en_cours',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Assurez-vous d'avoir la configuration appropriée pour le téléchargement d'images
        ]);

        // Gestion du téléchargement de l'image
        $imagePath = $request->file('image')->store('events_images', 'public');

        // Création de l'événement
        EventAVenir::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'slug' => $validatedData['slug'],
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.event-a-venir.index')->with('success', 'Votre évènement a été crée avec succès');
    }



    public function edit($id)
    {
        try {
            // Recherche de l'événement à éditer
            $event = EventAVenir::findOrFail($id);

            // Autres éventuelles opérations avant d'afficher le formulaire d'édition

            return view('admin.events.avenir.edit', compact('event'));
        } catch (\Exception $e) {
            // Gestion de l'erreur (redirection, journalisation, etc.)
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la récupération de l\'événement à éditer.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            // Recherche de l'événement à mettre à jour
            $event = EventAVenir::findOrFail($id);

            // Validation des données du formulaire
            $validatedData = $request->validate([
                'title' => 'required',
                'content' => 'required',
                'slug' => 'required|unique:event_a_venirs,slug,' . $event->id,
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Vous pouvez ajuster cette règle selon vos besoins
            ]);

            // Mise à jour des propriétés de l'événement
            $event->title = $validatedData['title'];
            $event->content = $validatedData['content'];
            $event->slug = $validatedData['slug'];

            // Gestion du téléchargement de la nouvelle image
            if ($request->hasFile('image')) {
                // Supprimer l'ancienne image si nécessaire
                // Storage::delete('events_images/' . basename($event->image));

                // Enregistrer la nouvelle image
                $imagePath = $request->file('image')->store('events_images', 'public');
                $event->image = $imagePath;
            }

            // Enregistrement des modifications
            $event->save();

            return redirect()->route('admin.event-a-venir.index')->with('success', 'L\'événement a été mis à jour avec succès');
        } catch (\Exception $e) {
            // Gestion de l'erreur (redirection, journalisation, etc.)
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour de l\'événement.');
        }
    }



    public function destroy($id)
    {
        try {
            // Recherche de l'événement à supprimer
            $event = EventAVenir::findOrFail($id);

            // Suppression de l'image associée
            if ($event->image) {
                Storage::delete('events_images/' . basename($event->image));
            }

            // Suppression de l'événement
            $event->delete();

            return redirect()->route('admin.event-a-venir.index')->with('success', 'L\'événement a été supprimé avec succès');
        } catch (\Exception $e) {
            // Gestion de l'erreur (redirection, journalisation, etc.)
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression de l\'événement.');
        }
    }
}
