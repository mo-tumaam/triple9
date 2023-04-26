<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ledger;
use App\Models\sub;
use App\Models\Category;
use App\Models\Allclient;


class Trip extends Model
{
protected $fillable = ['ledger_id', 'sub_id', 'category_id', 'allclient_id','container','owner','destination', 'rate',  'date', ];
  protected $dates = ['date'];
    use HasFactory;


            public function sub()
{
    return $this->BelongsTo(sub::class);
}

        public function category()
{
    return $this->BelongsTo(Category::class);
}




        public function allclient()
{
    return $this->BelongsTo(Allclient::class);
}


        public function ledger()
{
    return $this->BelongsTo(Ledger::class);
}

}
