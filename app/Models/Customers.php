<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

   protected $table = 'customers';
   
   public function orders(){
	   
	   return $this->hasMany('App\Models\Orders','cust_id','id');
   }

}
