<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Models\Oauth;
use Illuminate\Support\Facades\Hash;
Route::get('/', function () {
    // $o=new Oauth();
    // $o->Tokens=Hash::make('2RsysMIOa18g23aTYRIm8+TncuEwIV+bP+5qdcJOZiM=!@#$%12345');
    // $o->save();
    return view('welcome');
});

// Route::get('g',[Home::class,'g'])->name('g');