<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ledger;

class Master extends Model
{
    use HasFactory;
     protected $fillable = [ 'name', 'nature'];

             public function ledger()
{
    return $this->hasMany(Ledger::class);
}

             public function client()
{
    return $this->hasMany(Client::class);
}

}
