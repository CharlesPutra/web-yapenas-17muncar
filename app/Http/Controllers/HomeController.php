<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $datas = Profile::orderBy('created_at', 'desc')->first();
        //filtering mislist
        $misilist = explode(',', $datas->misi);
        return view('welcome',compact('datas','misilist'));
    }
}
