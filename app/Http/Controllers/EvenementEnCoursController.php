<?php

namespace App\Http\Controllers;

use App\Models\EventAVenir;
use Illuminate\Http\Request;
use App\Models\EvenementEnCour;
use Illuminate\Support\Str;


class EvenementEnCoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.eventencours', [
            'encours' => EvenementEnCour::orderby('created_at', 'desc')->paginate(6),
            'avenir' => EventAVenir::orderby('created_at', 'desc')->paginate(6)
        ]);
    }

    public function show($slug)
    {
        // Logique pour afficher un élément spécifique en utilisant le slug
        $event = EvenementEnCour::where('slug', $slug)->first();

        // Vérifier si l'événement existe
        if (!$event) {
            // Gérer le cas où l'événement n'est pas trouvé, par exemple rediriger vers une page d'erreur.
            abort(404);
        }

        return view('pages.show', compact('event'));
    }
}
