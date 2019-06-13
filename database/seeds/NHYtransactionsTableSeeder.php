<?php

use Illuminate\Database\Seeder;
use App\NHYTransactions;
use Illuminate\Support\Carbon;

class NHYtransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 50; $i++) {
            NHYTransactions::create([
                'amount' => rand(-555, 555),
                'account_id' => rand(1, 3),
            ]);
        }
    }
}
