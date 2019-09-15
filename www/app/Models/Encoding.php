<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encoding extends Model
{
  protected $fillable  = ["id","code"];
  protected $table = 'encoding';

  public function investors(){
      return $this->hasMany("App\Models\ModuleEncoding","module_encoding","encoding_id");
  }
}
