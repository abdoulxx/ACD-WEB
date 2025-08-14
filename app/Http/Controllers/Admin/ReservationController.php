<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the reservations.
     */
    public function index()
    {
        $reservations = DB::table('reservations')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
            
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Display the specified reservation.
     */
    public function show($id)
    {
        $reservation = DB::table('reservations')->where('id', $id)->first();
        
        if (!$reservation) {
            return redirect()->route('admin.reservations.index')
                ->with('error', 'Réservation non trouvée.');
        }
        
        return view('admin.reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified reservation.
     */
    public function edit($id)
    {
        $reservation = DB::table('reservations')->where('id', $id)->first();
        
        if (!$reservation) {
            return redirect()->route('admin.reservations.index')
                ->with('error', 'Réservation non trouvée.');
        }
        
        return view('admin.reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified reservation in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type_reservation' => 'required|in:sponsor,exposant,participant',
        ]);

        $updated = DB::table('reservations')
            ->where('id', $id)
            ->update([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'societe' => $request->societe,
                'poste' => $request->poste,
                'type_reservation' => $request->type_reservation,
                'updated_at' => now(),
            ]);

        if ($updated) {
            return redirect()->route('admin.reservations.index')
                ->with('success', 'Réservation mise à jour avec succès.');
        }

        return back()->with('error', 'Erreur lors de la mise à jour.');
    }

    /**
     * Remove the specified reservation from storage.
     */
    public function destroy($id)
    {
        DB::table('reservations')->where('id', $id)->delete();
        
        return redirect()->route('admin.reservations.index')
            ->with('success', 'Réservation supprimée avec succès.');
    }

    /**
     * Export reservations to CSV.
     */
    public function export()
    {
        $reservations = DB::table('reservations')
            ->orderBy('created_at', 'desc')
            ->get();

        $filename = 'reservations_evenement_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
            'Pragma' => 'public',
        ];

        $callback = function() use ($reservations) {
            $file = fopen('php://output', 'w');
            
            // BOM pour l'UTF-8
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            
            // En-têtes CSV
            fputcsv($file, [
                'ID',
                'Nom',
                'Prénom',
                'Email',
                'Téléphone',
                'Société',
                'Poste',
                'Type de Réservation',
                'Date de Réservation'
            ], ';');

            // Données
            foreach ($reservations as $reservation) {
                fputcsv($file, [
                    $reservation->id,
                    $reservation->nom ?? '',
                    $reservation->prenom ?? '',
                    $reservation->email ?? '',
                    $reservation->telephone ?? '',
                    $reservation->societe ?? '',
                    $reservation->poste ?? '',
                    $reservation->type_reservation ?? '',
                    $reservation->created_at ? date('d/m/Y H:i', strtotime($reservation->created_at)) : ''
                ], ';');
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
