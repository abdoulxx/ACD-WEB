<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\UserReservationMail;
use App\Mail\AdminReservationMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Affiche le formulaire de réservation.
     */
    public function create()
    {
        return view('pages.reservation');
    }

    /**
     * Enregistre une nouvelle réservation.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:255',
            'societe' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'type_reservation' => 'required|string|in:participant,sponsor,exposant',
        ]);

        $reservation = Reservation::create($data);

        // Définir l'e-mail de l'administrateur
        $adminEmail = 'acdnotif@gmail.com';

        // Envoyer les e-mails
        Mail::to($reservation->email)->send(new UserReservationMail($reservation));
        Mail::to($adminEmail)->send(new AdminReservationMail($reservation));

                return back()->with('success', __('reservation_form.success_message'));
    }
}
