<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route pour la page home
Route::get('/', function () {
    return view('home');
})->name('home');

// route pour le page conatct
Route::get('contact', function () {
    return view('contact');
})->name('contact');

// route pour la page thankyou
// cette route est pas nécessaire
Route::get('thankyou/{nom}/{email}/{message}', function ($nom, $email, $message) {
    return view('thankyou', [
        'nom' => $nom,
        'email' => $email,
        'message' => $message
    ]);
})->name('thankyou');

// on peut grouper les deux routes GET and Post pour /contact
Route::post('contact', function (Request $request) {
    // recevoir les données de formulaire
    $nom = $request->input('nom');
    $email = $request->input('email');
    $message = $request->input('message');

    // on peut redeger vers la route thankyou
    //  return redirect()->route('thankyou', [$nom, $email, $message]);

    //ou bien directement retourner la vue thankyou
    return view('thankyou', [
        'nom' => $nom,
        'email' => $email,
        'message' => $message
    ]);
});
