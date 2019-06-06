<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DII_roles_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DII_roles')->insert(
          [

          ]
        );
    }
}
