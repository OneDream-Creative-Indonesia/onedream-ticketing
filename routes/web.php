<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ticketing/forms', \App\Livewire\TicketingForms::class)->name('ticketing-forms');
Route::post('/ticketing/forms', \App\Livewire\TicketingForms::class)->name('ticketing-forms');
