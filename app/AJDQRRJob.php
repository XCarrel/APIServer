<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AJDQRRJob extends Model
{
    public $table = "AJDQRR_jobs";

    public function owner() {
        return $this->belongsTo('\App\AJDQRRUser','owner_id');
    }

    public function worker() {
        return $this->belongsTo('\App\AJDQRRUser','worker_id');
    }
}
