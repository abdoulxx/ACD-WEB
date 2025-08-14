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
     * Remove the specified reservation from storage.
     */
    public function destroy($id)
    {
        DB::table('reservations')->where('id', $id)->delete();
        
        return redirect()->route('admin.reservations.index')
            ->with('success', 'Réservation supprimée avec succès.');
    }
}
