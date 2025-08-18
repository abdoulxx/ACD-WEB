<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RencontreController extends Controller
{
    /**
     * Display the Rencontre 2026 page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.rencontre-2026');
    }
}
