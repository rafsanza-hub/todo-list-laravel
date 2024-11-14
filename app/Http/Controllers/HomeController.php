<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function save(Request $request){
        $request->input('name');

        return redirect()->to('home');
    }
}
