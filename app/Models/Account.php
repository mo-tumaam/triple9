<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ledger;
class Account extends Model
{
    use HasFactory;
protected $fillable = [ 'amount', 'ledger_id',  'date'];

            public function ledger()
{
    return $this->BelongsTo(Ledger::class);
}

}
