<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table='accounts';
    protected $fillable=['account_name','account_type','account_no'];
   // protected $guarded=['created_at','updated_at'];

}
