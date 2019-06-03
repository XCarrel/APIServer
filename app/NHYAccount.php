<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NHYAccount extends Model
{
    public $table = "NHY_accounts";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'favorite',
        'value',
    ];

    public function nhy_transactions()
    {
        return $this->hasMany('App\NHYTransactions');
    }
}
