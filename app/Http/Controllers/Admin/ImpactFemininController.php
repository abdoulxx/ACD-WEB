<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImpactFemininController extends Controller
{
    /**
     * Display a listing of the impact feminin candidatures.
     */
    public function index()
    {
        $candidatures = DB::table('impact_feminin_candidatures')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
            
        return view('admin.impact-feminin.index', compact('candidatures'));
    }

    /**
     * Display the specified candidature.
     */
    public function show($id)
    {
        $candidature = DB::table('impact_feminin_candidatures')->where('id', $id)->first();
        
        if (!$candidature) {
            return redirect()->route('admin.impact-feminin.index')
                ->with('error', 'Candidature Impact Féminin non trouvée.');
        }
        
        return view('admin.impact-feminin.show', compact('candidature'));
    }

    /**
     * Remove the specified candidature from storage.
     */
    public function destroy($id)
    {
        DB::table('impact_feminin_candidatures')->where('id', $id)->delete();
        
        return redirect()->route('admin.impact-feminin.index')
            ->with('success', 'Candidature Impact Féminin supprimée avec succès.');
    }
}
