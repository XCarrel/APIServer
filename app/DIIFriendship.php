<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DIIFriendship extends Model
{
    public $table = "DII_friendships";

    public function user(){
        return $this->belongsTo("App\DIIUser", "DII_user_id");
    }

    public function user2() {
        return $this->belongsTo("App\DIIUser", "DII_user_id2");
    }
}
