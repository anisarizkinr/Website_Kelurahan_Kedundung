<?php

namespace App\Http\Controllers;
use App\Models\KontakKami;
use App\Models\Judul;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function visi(){
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        return view('user.profil.visi', compact('kontak','judul'));
    }

}
