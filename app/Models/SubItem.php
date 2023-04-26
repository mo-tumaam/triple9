<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Trip;

class SubItem extends Model
{
    use HasFactory;

 protected $fillable = [ 'name', 'item_id'];
        public function item()
{
    return $this->BelongsTo(Item::class);
}

        public function trip()
{
    return $this->hasMany(Trip::class);
}
}
