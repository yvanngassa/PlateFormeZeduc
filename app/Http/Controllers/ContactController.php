<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Retourne la vue 'contact.blade.php'
        return view('contact');
    }
}