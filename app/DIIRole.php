<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class DIIRole extends Model
{
    public $table = "DII_roles";

    public function user(){
        return $this->hasOne("App\DIIUser");
    }
}

