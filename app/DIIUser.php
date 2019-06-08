<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DIIUser extends Model
{
    protected $fillable = [
        "fingerPrintHash",
    ];

    public $table = "DII_users";

    public function role(){
        return $this->belongsTo('App\DIIRole');
    }

    public function friendship(){
        return $this->hasMany('App\DIIFriendship', 'DII_user_id');
    }
}
