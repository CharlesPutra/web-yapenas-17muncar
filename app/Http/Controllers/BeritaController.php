<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function show($slug)
    {
        $berita = news::where('slug', $slug)->firstOrFail();
        return view('showberita', compact('berita'));
    }
}
