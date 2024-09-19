<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataControle;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('login',[DataControle::class,'login']);
// Route::get('FeshData',[DataControle::class,'FeshData']);
Route::middleware('auth:sanctum')->get('FeshData',[DataControle::class,'FeshData']);