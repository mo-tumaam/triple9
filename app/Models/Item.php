<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sub;

class Item extends Model
{
    use HasFactory;
     protected $fillable = [ 'item'];



             public function subItem()
{
    return $this->hasMany(sub::class);
}
}



