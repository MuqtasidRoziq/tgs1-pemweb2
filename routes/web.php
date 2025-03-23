<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    $title = 'Homepage';
    return view('web.homepage',['title'=>$title ] );
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('produk', function(){
    $title = 'Produk';
    return view('web.products' , ['title'=>$title]);
});
    
Route::get('categories-male', function(){
    $title = 'Categories Male';
    return view('web.categories-male', ['title'=>$title]);
});

Route::get('categories-female', function(){
    $title = 'Categories Female';
    return view('web.categories-female', ['title'=>$title]);
});

Route::get('categories-kids', function(){
    $title = 'Categories Kids';
    return view('web.categories-kids', ['title'=>$title]);
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
