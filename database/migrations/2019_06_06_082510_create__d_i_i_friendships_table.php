<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDIIFriendshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DII_friendships', function (Blueprint $table) {
            $table->unsignedBigInteger('DII_user_id');
            $table->unsignedBigInteger('DII_user_id2');

            $table->foreign('DII_user_id')->references('id')->on('DII_users');
            $table->foreign('DII_user_id2')->references('id')->on('DII_users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DII_friendships', function (Blueprint $table) {
            //
        });
    }
}
