<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuControler extends Controller
{
    public function index (){
        return view('buku');
    }
}
