<?php

use Illuminate\Database\Seeder;
use App\NHYAccount;

class NHYAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NHYAccount::create([
            'name' => 'PosteFinance',
            'favorite' => true,
            'value' => 200
        ]);

        NHYAccount::create([
            'name' => 'UBS',
            'favorite' => false,
            'value' => 5000
        ]);

        NHYAccount::create([
            'name' => 'Raiffeisen',
            'favorite' => false,
            'value' => 500
        ]);
    }
}
