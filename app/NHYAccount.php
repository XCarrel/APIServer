<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NHYAccount extends Model
{
<<<<<<< HEAD
    public $table = "NHY_Accounts";

    public function transactions()
    {
        return $this->hasMany('App\NHYTransaction', 'account_id');
=======
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
>>>>>>> 9cf69fb856f1a5e9396432d7c97fab1eaf9fc15f
    }
}
