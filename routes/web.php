<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Clients;



Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
->middleware(['auth', 'verified'])
->name('dashboard');

Route::view('profile', 'profile')
->middleware(['auth'])
->name('profile');

// Route::middleware(['auth'])->group(function () {
//     Route::resource('clients', ClientController::class);
// });

Route::get('clients', Clients::class);

    // Route::view('clients', 'clients')
    // ->middleware(['auth'])
    // ->name('clients');



require __DIR__.'/auth.php';
