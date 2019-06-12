<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XCLFlower extends Model
{
    public $table = "XCL_flowers";

    public $timestamps = false;

    public function names() {
        return $this->hasMany('\App\XCLFlowerName','flower_id');
    }
}
