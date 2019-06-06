<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DIIFriendship extends Model
{
    public $table = "DII_friendships";

    public function user(){
        return $this->belongsTo("App\DIIUser");
    }

    public function user1() {
        return $this->belongsTo("App\DIIUser");
    }
}
