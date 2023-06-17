<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index(){
        return view('berita', [
            "title" => "Berita",
            'berita' => Berita::all()
        ]);
    }
}
