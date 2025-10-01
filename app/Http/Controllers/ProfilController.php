<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view ('beranda',['title' => "Home"]);
    }
        public function profil()
    {
            $data = [
            'nama' => 'Aqil Zamzami Musthofa',
            'kelas' => '11 PPLG 2',
            'sekolah' => 'SMK Raden Umar Said'
        ];
        return view('profil',['title' => "Profil"], $data);
    }
    public function kontak()
    {
            $data = [
            'email' => 'aqilzamzamy@gmail.com',
            'no' => '085853936681'
        ];
        return view('kontak',['title' => "Kontak"], $data);
    }
    public function home()
    {
        return view ('home',['title' => "Home"]);
    }

}