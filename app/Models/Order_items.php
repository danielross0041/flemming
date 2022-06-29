<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    use HasFactory;

   protected $table = 'order_items';
   protected $fillable = [
        'order_id',
        'item_desc',
        'item_price',
        'game_units',
        'mix_factor',
'mix_units',
'total_units',
'item_total',
    ];
   
   public function order(){
	   
	   return $this->hasOne('App\Models\Orders','order_id','order_id');
   }
}
