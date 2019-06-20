<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PBNAsset extends Model
{
    public $table = "PBN_Assets";

    public function type(){
        return $this->belongsTo('App\PBN_types');
    }

    public function audits() {
        return $this->belongsToMany('App\PBNAudit', "PBN_audits_assets","asset_id","audit_id")->withPivot('status_id');
    }
}
