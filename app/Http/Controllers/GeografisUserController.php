<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geografis;
use App\Models\Wilayah;
use App\Models\KontakKami;
use App\Models\Maps;
use App\Models\Judul;
use App\Models\sosmed;

class GeografisUserController extends Controller
{
    public function geografis(){
        $geografis = Geografis::all();
        $wilayah = Wilayah::all();
        $maps = Maps::orderBy('id','asc')->first();
        $kontak = KontakKami::orderBy('id','asc')->first();
        $judul = Judul::orderBy('id','asc')->first();
        $sosmed= Sosmed::all();
        return view('user.profil.geografis', [
            'data' => $geografis,
            'wilayah' => $wilayah,
            'kontak' =>$kontak,
            'maps' =>$maps,
            'judul'=>$judul,
            'sosmed'=>$sosmed,
        ]);
    }
}
