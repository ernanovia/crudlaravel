<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Erna Novia Safitri";

        $pelajaran = ["Alpro", "Kalkulus", "Metopen"];

        return view('biodata', ['nama' => $nama], ['matkul' => $pelajaran ]);
    }
}
