<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DII_users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DII_users')->insert(
            [
                "name" => "Dardan",
                "surname" => "Iljazi",
                "fingerPrintHash" => "cmFuZG9tX2hhc2g=",
                "ishere" => false,
                "role_id" => DII_r
            ]
        );
    }
}
