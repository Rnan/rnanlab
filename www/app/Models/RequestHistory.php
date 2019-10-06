<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestHistory extends Model
{
  protected $fillable  = ["id","module_id","csrf_token","client_ip"];
  protected $table = 'request_history';
}
