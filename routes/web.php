<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('home'); // Vue pour la page d'accueil
})->name('home');

Route::get('/menu', function () {
    return view('menu'); // Vue pour la page du menu
})->name('menu');

Route::get('/contact', function () {
    return view('contact'); // Vue pour la page de contact
})->name('contact');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog',function(){
    return 'hello';
});
Route::get('/connexion', function () {
    return view('connexion');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/employes', function () {
    return view('employes');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/panier', function () {
    return view('panier');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/pageaccueilgérant', function () {
    return view('pageaccueilgérant');
});
Route::get('/pagegénéralegérant', function () {
    return view('pagegénéralegérant');
});

