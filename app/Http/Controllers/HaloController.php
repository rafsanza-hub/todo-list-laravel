<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    
    public function halloDunia(Request $request ,$name){
        $url = $request->fullUrl();
        return "Hallo $name, Saya Dunia $url ";
    }

    public function request(Request $request,){
        $name = $request->input('name');
        return "Nama saya $name";
    }
}
