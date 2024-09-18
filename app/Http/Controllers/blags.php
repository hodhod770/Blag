<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blags extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
        'link' => 'required|url|max:255',
        'image' => 'required|url|max:255',
        'details' => 'required|string|max:1000',
        ]);
    }
}
