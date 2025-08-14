<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the candidatures.
     */
    public function index()
    {
        $candidatures = DB::table('candidatures')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
            
        return view('admin.candidatures.index', compact('candidatures'));
    }

    /**
     * Display the specified candidature.
     */
    public function show($id)
    {
        $candidature = DB::table('candidatures')->where('id', $id)->first();
        
        if (!$candidature) {
            return redirect()->route('admin.candidatures.index')
                ->with('error', 'Candidature non trouvée.');
        }
        
        return view('admin.candidatures.show', compact('candidature'));
    }

    /**
     * Remove the specified candidature from storage.
     */
    public function destroy($id)
    {
        DB::table('candidatures')->where('id', $id)->delete();
        
        return redirect()->route('admin.candidatures.index')
            ->with('success', 'Candidature supprimée avec succès.');
    }
}
