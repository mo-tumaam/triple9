<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Trip;
use Laravel\Scout\Searchable;

class sub extends Model
{
    use HasFactory;
    use Searchable;

     protected $fillable = [ 'name', 'item_id'];
        public function item()
{
    return $this->BelongsTo(Item::class);
}

        public function trip()
{
    return $this->hasMany(Trip::class);
}


public function toSearchableArray()
{
    return [
        'id' => (int) $this->id,
        'name' => $this->name,
       
    ];
}
}
