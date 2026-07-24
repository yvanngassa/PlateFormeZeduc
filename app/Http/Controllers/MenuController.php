<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Retourne la vue 'menu.blade.php'
        return view('menu');
    }
}