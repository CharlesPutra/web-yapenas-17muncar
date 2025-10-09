<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function tentangkami() {
        $datas = Profile::orderBy('created_at', 'desc')->first();
        return view('aboutus',compact('datas'));
    }

    public function visimisi() {
        $datas = Profile::orderBy('created_at', 'desc')->first();
        $misilist = explode(',', $datas->misi);
        return view('visimisi',compact('datas','misilist'));
    }
}
