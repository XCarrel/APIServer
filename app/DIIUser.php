<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DIIUser extends Model
{
    protected $fillable = [
        "fingerPrintHash",
        "name",
        "surname"
    ];

    public $table = "DII_users";

    public function role(){
        return $this->belongsTo('App\DIIRole');
    }

    public function friendship(){
        return $this->hasMany('App\DIIFriendship', 'DII_user_id');
    }

    /**
     * Because we have only one line in the dii_friendships meaning a friendship between 2 people, we need to check if this person
     * is DII_user_id or DII_user_id2 (here friendship2)
     */
    public function friendship2(){
        return $this->hasMany('App\DIIFriendship', 'DII_user_id2');
    }
}
