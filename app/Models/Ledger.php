<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master;
use App\Models\Allclient;
use App\Models\Trip;

class Ledger extends Model
{
    use HasFactory;

     protected $fillable = [ 'name', 'master_id'];
     
        public function master()
{
    return $this->BelongsTo(Master::class);
}

             public function client()
{
    return $this->hasMany(Allcient::class);
}

        public function trip()
{
    return $this->hasMany(Trip::class);
}
}
