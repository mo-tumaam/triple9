<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Allclient;

class Receive extends Model
{
    use HasFactory;
    protected $fillable = [ 'paid', 'ledger_id', 'allclient_id', 'date'];

    public function allclient()
{
    return $this->BelongsTo(Allclient::class);
}
}

