<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentionsLegalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('pages.mentions');
    }

}
