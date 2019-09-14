<?php

use Illuminate\Database\Seeder;

class EncodingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('encoding')->insert(['code' => 'UTF-8']);
        DB::table('encoding')->insert(['code' => 'ASCII']);
        DB::table('encoding')->insert(['code' => 'UTF-16BE']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-1']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-2']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-3']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-4']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-5']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-6']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-7']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-8']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-9']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-10']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-11']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-12']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-13']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-14']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-15']);
        DB::table('encoding')->insert(['code' => 'ISO-8859-16']);
        DB::table('encoding')->insert(['code' => 'SHIFT-JIS']);
        DB::table('encoding')->insert(['code' => 'WINDOWS-1250']);
        DB::table('encoding')->insert(['code' => 'WINDOWS-1251']);
        DB::table('encoding')->insert(['code' => 'WINDOWS-1252']);
        DB::table('encoding')->insert(['code' => 'WINDOWS-1256']);
        DB::table('encoding')->insert(['code' => 'GBK']);
        DB::table('encoding')->insert(['code' => 'EUC-KR']);

    }
}
