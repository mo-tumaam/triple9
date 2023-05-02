<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ledger;
use App\Models\sub;
use App\Models\Account;
use App\Models\Trip;
use Laravel\Scout\Searchable;

class Expense extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['ledger_id', 'sub_id', 'trip_id', 'account_id', 'amount',  'date', 'remark' ];
     protected $dates = ['date'];

            public function trip()
{
    return $this->BelongsTo(Trip::class);
}

        public function sub()
{
    return $this->BelongsTo(sub::class);
}

        public function account()
{
    return $this->BelongsTo(Account::class);
}

        public function ledger()
{
    return $this->BelongsTo(Ledger::class);
}

public function toSearchableArray()
{
    return [
        'id' => (int) $this->id,
        'trip_id' => $this->trip_id,
        'sub_id' => $this->sub_id,
        'amount' => (float) $this->amount,
    ];
}

}
