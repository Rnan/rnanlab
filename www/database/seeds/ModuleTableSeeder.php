<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('module')->insert(['name' => 'Base64Encrypt']);
      DB::table('module')->insert(['name' => 'Base64Decrypt']);
      DB::table('module')->insert(['name' => 'QRCode']);
      DB::table('module')->insert(['name' => 'Barcode']);
    }
}
