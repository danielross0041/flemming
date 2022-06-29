<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'cust_id',
        'date',
        'location',
        'status',
        'notes',
'yielded_weight',
'slot_number',
'total',
    ];

   protected $table = 'orders';
   
   public function orderItems(){
	   
	   return $this->hasMany('App\Models\Order_items','order_id','order_id')->orderBy('order_id','DESC');
   }
   
   public function customer(){
	   
	   return $this->hasOne('App\Models\Customers','id','cust_id')->orderBy('id','DESC');
   }
}
