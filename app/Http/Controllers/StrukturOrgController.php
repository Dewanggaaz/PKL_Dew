<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturORGController extends Controller
{
    public function index(){
        return view('strukturORG', [
        "title" => "StrukturORG",
        ]);
    }
}
