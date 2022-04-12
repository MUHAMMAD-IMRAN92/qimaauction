<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   public function category()
   {
       return $this->hasOne(Category::class , 'id' , 'category_id');
   }
   public function origin()
   {
       return $this->hasOne(Origin::class ,'id' , 'origin_id');
   }
   public function images()
   {
       return $this->hasMany(ProductImage::class, 'product_id' ,'id' );
   }
}
