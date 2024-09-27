<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
->middleware(['auth', 'verified'])
->name('dashboard');

Route::view('profile', 'profile')
->middleware(['auth'])
->name('profile');

Route::view('simple', 'simple')
->middleware(['auth'])
->name('simple');

Route::middleware(['auth'])->group(function () {
    Route::get('/clients/index', App\Livewire\Clients\Index::class)->name('clients.index');
    Route::get('/clients/create', App\Livewire\Clients\Create::class)->name('clients.create');
});


    // Route::view('clients', 'clients')
    // ->middleware(['auth'])
    // ->name('clients');



require __DIR__.'/auth.php';
