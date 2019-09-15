<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleEncoding extends Model
{
    protected $table = 'module_encoding';


    public function purchase() {
        return $this->belongsToMany('App\Models\Module','encoding_id');
    }

    public function investor() {
        return $this->belongsToMany('App\Models\Encoding','module_id');
    }
    
}
