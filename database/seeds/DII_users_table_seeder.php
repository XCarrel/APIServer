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
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),

            ],
            [
                "name" => "Grand",
                "surname" => "Baracké",
                "fingerPrintHash" => "Z3JhbmRiYXJhY2vDqQ==",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "security")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Robert",
                "surname" => "De Niro",
                "fingerPrintHash" => "cm9iZXJ0ZGVuaXJv",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Donald",
                "surname" => "Bellisario",
                "fingerPrintHash" => "ZG9uYWxkYmVsaXNhcmlv",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Mark",
                "surname" => "Harmon",
                "fingerPrintHash" => "bWFya2hhcm1vbg==",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Sean",
                "surname" => "Murray",
                "fingerPrintHash" => "c2Vhbm11cnJheQ==",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Michael",
                "surname" => "Weatherly",
                "fingerPrintHash" => "bWljaGFlbHdlYXRoZXJseQ==",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Jim",
                "surname" => "Caviezel",
                "fingerPrintHash" => "amltY2F2aWV6ZWw=",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Michael",
                "surname" => "Emerson",
                "fingerPrintHash" => "bWljaGFlbGVtZXJzb24=",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Amy",
                "surname" => "Acker",
                "fingerPrintHash" => "YW15YWNrZXI=",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
            [
                "name" => "Sarah",
                "surname" => "Shahi",
                "fingerPrintHash" => "c2FyYWhzaGFoaQ==",
                "ishere" => \Illuminate\Support\Arr::random([true, false]),
                "role_id" => DIIRole::all()->where("name", "user")->first()->id,
                "created_at" => \Carbon\Carbon::now(),
            ],
        ]);

        foreach (\App\DIIUser::all() as $user) {
            if ($user->ishere) {
                $random = \Illuminate\Support\Arr::random([1, 2]);
                if ($random === 1)
                    $user->updated_at = \Carbon\Carbon::now()->subMinutes(\Illuminate\Support\Arr::random([5, 10, 15, 20, 25, 40, 60, 120]));
                else
                    $user->updated_at = \Carbon\Carbon::now()->addMinutes(\Illuminate\Support\Arr::random([5, 10, 15, 20, 25, 40, 60, 120]));

                $user->save();
            }
        }
    }
}
