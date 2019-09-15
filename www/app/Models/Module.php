<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable  = ["id","name"];
    protected $table = 'module';

    public function encodingItems(){
        return $this->hasMany("App\Models\Encoding");
    }

}
