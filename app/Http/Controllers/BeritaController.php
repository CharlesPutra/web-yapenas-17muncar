<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        $datas = news::orderBy('published_at', 'desc')->paginate(3);
        return view('berita', compact('datas'));
    }

    public function show($slug)
    {
        $berita = news::where('slug', $slug)->firstOrFail();
        // ubah link YouTube jadi embed otomatis
        $berita->link_yt = str_replace(['youtu.be/', 'watch?v='], ['www.youtube.com/embed/', 'embed/'], $berita->link_yt);

        return view('showberita', compact('berita'));
    }
}
