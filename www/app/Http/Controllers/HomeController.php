<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      return view('index',['str' => '']);
    }

    public function encryptBase64(){
      return view('encryptBase64',['str' => '']);
    }

    public function encrypt(Request $request){

      $str = base64_encode($request->input('input'));
      return view('encryptBase64',['str' => $str]);
    }
}
