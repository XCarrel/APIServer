<?php

use App\DIIRole;
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
        DB::table('DII_friendships')->insert([
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Dardan')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Robert')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Dardan')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Donald')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Dardan')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Mark')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Dardan')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Jim')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Dardan')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Amy')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Dardan')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Sarah')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Dardan')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Michael')->where('surname', 'Emerson')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Dardan')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Michael')->where('surname', 'Weatherly')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],


                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Donald')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Mark')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Donald')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Sean')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],
                [
                    "DII_user_id" => \App\DIIUser::where('name', 'Donald')->first()->id,
                    "DII_user_id2" => \App\DIIUser::where('name', 'Michael')->where('surname', 'Weatherly')->first()->id,
                    "created_at" => \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ],

            ]
        );
    }
}
