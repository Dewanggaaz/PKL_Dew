<?php

namespace App\Http\Controllers;

use App\Models\HubungiKami;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact', [
        "title" => "Contact",
        ]);
    }

    public function addContact(Request $request){
        $saran = HubungiKami::create($request->all());

        return redirect('contact');
    }
}
