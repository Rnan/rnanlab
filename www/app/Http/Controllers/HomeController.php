<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;

use App\Models\Encoding;
use App\Models\Module;

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

    public function do_encrypt(Request $request){
      //Log::debug('## HomeController encrypt');
      $str = base64_encode($request->input('input'));
      return view('encryptBase64',['str' => $str]);
    }



    public function decryptBase64(){
      //Log::debug('## HomeController decryptBase64');
      return view('decryptBase64',['str' => '']);
    }

    public function do_decrypt(Request $request){
      //Log::debug('## HomeController decrypt');
      $str = base64_decode($request->input('input'));
      return view('decryptBase64',['str' => $str]);
    }



    public function qrcode(){


      /*
      $module=Module::find(3);
      Log::debug('$module:'.$module->name);
      $encodingItems = $module->encodingItems();
      foreach ($encodingItems as $encode) {
          Log::debug('code:'.$encode->code);
      }*/
      $encodingItems=Encoding::All();

      return view('qrcode',['str' => '','encodingItems' => $encodingItems, 'view_path' => '','opt_encoding' => 'UTF-8','opt_size' => 200]);
    }

    public function do_qrcode(Request $request){
      $input = $request->input('input');
      $opt_encoding = $request->input('opt_encoding');
      $opt_size = $request->input('opt_size');

      $temp_path="../public/temp";
      $csrf_token = csrf_token();
      $path = $temp_path."/qrcodes/".$csrf_token;
      if(!File::isDirectory($path)) {
        File::makeDirectory($path, 0777, true, true);
      }
      $file_full_path = $path.'/qrcode.png';
      $view_path = "temp/qrcodes/".$csrf_token.'/qrcode.png';
      QrCode::encoding($opt_encoding)->format('png')->size($opt_size)->generate($input,$file_full_path);

      $encodingItems=Encoding::All();

      return view('qrcode',['str' => '','encodingItems' => $encodingItems, 'view_path' => $view_path,'opt_encoding' => $opt_encoding,'opt_size' => $opt_size]);
    }

    public function barcode(){
      return view('barcode',['str' => '']);
    }
}
