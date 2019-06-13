<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NHYTransactions extends Model
{
    public $table = "NHY_transactions";
    
    protected $fillable = [
        'amount',
        'account_id',
    ];

    public function nhy_account()
    {
        return $this->belongsTo('App\NHYAccount', 'account_id');
    }
}
