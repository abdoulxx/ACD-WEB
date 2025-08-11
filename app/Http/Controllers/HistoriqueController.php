<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriqueController extends Controller
{

    public function historique()
    {
        return view('pages.historique');
    }


    public function reportage()
    {
        return view('pages.reportage');
    }

    public function event()
    {
        return view('pages.event');
    }

    public function diner()
    {
        return view("pages.diner");
    }

    public function prix()
    {
        return view("pages.prix");
    }

    public function retro()
    {
        return view("pages.retro");
    }
}
