<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DII_friendships_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DII_friendships')->insert(
            [

            ]
        );
    }
}
