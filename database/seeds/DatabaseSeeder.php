<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                DII_roles_table_seeder::class,
                DII_users_table_seeder::class,
                DII_friendships_table_seeder::class,
            ]);
    }
}
