<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class VacacionesController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
         return view('custom');
    }
}

