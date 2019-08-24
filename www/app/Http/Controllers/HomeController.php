<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(){
      //Log::debug('## HomeController index');
      return view('index',['str' => '']);
    }



    public function encryptBase64(){
      //Log::debug('## HomeController encryptBase64');
      return view('encryptBase64',['str' => '']);
    }

    public function encrypt(Request $request){
      //Log::debug('## HomeController encrypt');
      $str = base64_encode($request->input('input'));
      return view('encryptBase64',['str' => $str]);
    }



    public function decryptBase64(){
      //Log::debug('## HomeController decryptBase64');
      return view('decryptBase64',['str' => '']);
    }

    public function decrypt(Request $request){
      //Log::debug('## HomeController decrypt');
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
