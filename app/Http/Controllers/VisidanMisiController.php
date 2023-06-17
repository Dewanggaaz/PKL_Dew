<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisidanMisiController extends Controller
{
    public function index(){
        return view('visidanmisi', [
        "title" => "VisidanMisi",
        ]);
    }
}
