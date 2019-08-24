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



    public function decryptBase64(){
      return view('decryptBase64',['str' => '']);
    }

    public function decrypt(Request $request){

      $str = base64_decode($request->input('input'));
      return view('decryptBase64',['str' => $str]);
    }



    public function qrcode(){
      return view('qrcode',['str' => '']);
    }

    public function barcode(){
      return view('barcode',['str' => '']);
    }
}
