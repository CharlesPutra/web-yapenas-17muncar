<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $datas = Profile::orderBy('created_at', 'desc')->first();
        $beritas = news::orderBy('created_at', 'desc')->take(3)->get();
        //filtering mislist
        $misilist = explode(',', $datas->misi);
        return view('welcome',compact('datas','misilist','beritas'));
    }
}
