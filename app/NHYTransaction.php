<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NHYTransaction extends Model
{
    public $table = "NHY_transactions";

    public function account()
    {
        return $this->belongsTo('\App\NHYAccount','account_id');
    }
}
