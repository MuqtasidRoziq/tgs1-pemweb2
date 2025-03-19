<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/produk', function(){
    return "<h1>ini halaman product</h1>";
});
    
Route::get('/detail-produk/{$id}', function(){
    return '<h1>ini halaman detail-produk {$id} </h1>';
});
    
Route::get('/keranjang', function(){
    return '<h1>ini halaman keranjang</h1>';
});
    
Route::get('/search', function(){
    return '<h1>ini halaman search</h1>';
});
    
Route::get('/chekout', function(){
    return '<h1>ini halaman chekout</h1>';
});
    
Route::get('/kategori', function(){
    return '<h1>ini halaman kategori</h1>';
});
    
Route::get('/kategori/{$id}', function(){
    return '<h1>ini halaman kategori {$id}</h1>';
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
