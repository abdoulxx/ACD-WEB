<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.about');
    }


    public function mot()
    {
        return view('pages.mot');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function mission()
    {
        return view('pages.mission');
    }

    public function mission1()
    {
        return view('pages.mission-1');
    }

    public function mission2()
    {
        return view('pages.mission-2');
    }

    public function mission3()
    {
        return view('pages.mission-3');
    }

    public function mission4()
    {
        return view('pages.mission-4');
    }









    public function solution()
    {
        return view('pages.solution');
    }

    public function solution1()
    {
        return view('pages.solution-1');
    }

    public function solution2()
    {
        return view('pages.solution-2');
    }

    public function solution3()
    {
        return view('pages.solution-3');
    }

    public function solution4()
    {
        return view('pages.solution-4');
    }

    public function solution5()
    {
        return view('pages.solution-5');
    }

    public function solution6()
    {
        return view('pages.solution-6');
    }



    public function magazine()
    {
        return view('pages.magazine');
    }
}
