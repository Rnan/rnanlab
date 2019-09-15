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
      $path='../public/temp/qrcodes';
      if(!File::isDirectory($path)) {
        //$session_id = Session::getId();
        File::makeDirectory($path, 0777, true, true);
      }
      //QrCode::encoding('UTF-8')->format('png')->size(200)->generate('ทดสอบ','../public/temp/qrcodes/qrcode.png');

      /*
      $module=Module::find(3);
      Log::debug('$module:'.$module->name);
      $encodingItems = $module->encodingItems();
      foreach ($encodingItems as $encode) {
          Log::debug('code:'.$encode->code);
      }*/
      $encodingItems=Encoding::All();

      return view('qrcode',['str' => '','encodingItems' => $encodingItems]);
    }

    public function do_qrcode(){

      QrCode::encoding('UTF-8')->size(100)->format('png')->generate('ทดสอบ','../public/qrcodes/qrcode.png');
      return view('qrcode',['str' => '']);
    }

    public function barcode(){
      return view('barcode',['str' => '']);
    }
}
