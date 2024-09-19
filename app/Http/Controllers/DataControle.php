<?php

namespace App\Http\Controllers;

use App\Models\Oauth;
use App\Models\RecordBlag;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class DataControle extends Controller
{

   
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        $key = 'HoyXiwMm3crppNxr4SF65iRlTaKVUGVGaAqCqLGvDwQEcku7QT';
        $data = base64_decode($request->Tokens);
        $iv_length = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($data, 0, $iv_length);
        $encrypted = substr($data, $iv_length);
        $decrypted = openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);
        $user = Oauth::first();
        
        // return $decodedToken;
    if (! $user || ! Hash::check($decrypted, $user->Tokens)) {
        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    // Generate token
    $token = $user->createToken('app-b-token');
    return response()->json(['token' => $token->plainTextToken]);
    }

    public function FeshData()
    {
        $data=RecordBlag::Where('stute','0')->get();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Oauth $oauth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oauth $oauth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oauth $oauth)
    {
        //
    }
}
