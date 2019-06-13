<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NHYAccount extends Model
{
    public $table = "NHY_Accounts";

    public function transactions()
    {
        return $this->hasMany('App\NHYTransaction', 'account_id');
    }
}
