<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index($name){
        $data = [
            'name' => $name
        ];
        return view('coba', $data);
    }
}
