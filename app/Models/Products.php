<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   use HasFactory;

   protected $table = 'products';

   public function makerName()
   {
      return $this->belongsTo('App\Models\Make', 'make');
   }
   public function categoryName()
   {
      return $this->belongsTo('App\Models\Category', 'category');
   }
   
}
