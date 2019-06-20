<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AJDQRRUser extends Model
{
    public $table = "AJDQRR_users";

    public function jobsOwned() {
        return $this->hasMany('\App\AJDQRRJob','owner_id');
    }

    public function jobsWorked() {
        return $this->hasMany('\App\AJDQRRJob','worker_id');
    }
}
