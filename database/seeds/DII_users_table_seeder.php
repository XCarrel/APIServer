<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\DIIRole;

class DII_users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DII_users')->insert([
            [
                "name" => "Dardan",
                "surname" => "Iljazi",
                "fingerPrintHash" => "cmFuZG9tX2hhc2g=",
                "ishere" => false,
                "role_id" => DIIRole::all()->where("name", "invité")->first()->id,
            ],
            [
                "name" => "Grand",
                "surname" => "Baracké",
                "fingerPrintHash" => "GBasdasd=",
                "ishere" => false,
                "role_id" => DIIRole::all()->where("name", "secu")->first()->id,
            ]
        ]);
    }
}
