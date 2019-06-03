<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PBNAsset extends Model
{
    public $table = "PBN_Assets";

    public function type(){
        return $this->belongsTo('App\PBN_types');
    }
}
