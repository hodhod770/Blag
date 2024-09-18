<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
Route::get('/', function () {
    return view('welcome');
});

Route::get('g',[Home::class,'g'])->name('g');