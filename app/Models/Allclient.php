<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ledger;
use App\Models\trip;
use App\Models\Receive;

class Allclient extends Model
{
    use HasFactory;

         protected $fillable = ['name',   'address',  'contact', 'ledger_id',];

public function ledger()
{
    return $this->BelongsTo(Ledger::class);
}

        public function trip()
{
    return $this->hasMany(Trip::class);
}


        public function Receive()
{
    return $this->hasMany(Receive::class);
}

}
