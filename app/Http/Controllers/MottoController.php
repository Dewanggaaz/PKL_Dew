<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MottoController extends Controller
{
    public function index(){
        return view('motto', [
        "title" => "Motto",
        ]);
    }
}
