<?php

namespace App\Http\Controllers\Admin;

use App\Models\Forum;
use App\Models\EventAVenir;
use Illuminate\Http\Request;
use App\Models\EvenementEnCour;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.home', [

            'forums' => Forum::orderby('created_at', 'desc')->paginate(25),
            'encours' => EvenementEnCour::orderby('created_at', 'desc')->paginate(3)
        ]);
    }
}
