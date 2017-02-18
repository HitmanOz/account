<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table='transactions';
   protected $guarded=['active','created_at','updated_at'];
}
