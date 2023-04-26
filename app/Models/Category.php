<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
use App\Models\Item;


class Category extends Model
{
    use HasFactory;
  
   protected $fillable = ['name', 'salary', 'position', 'startDate','tin', 'address', 'balance', 'contact'];
   protected $dates = ['startDate'];

        public function subCategory()
{
    return $this->hasMany(SubCategory::class);
}

   /*  public function item()
{
    return $this->BelongsTo(Item::class);
}*/


}
