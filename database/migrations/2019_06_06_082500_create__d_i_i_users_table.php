<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\DIIRole;

class CreateDIIUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DII_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("name");
            $table->longText("fingerPrintHash");
            $table->text("surname");
            $table->boolean("ishere")->default(false);
            $table->unsignedBigInteger('role_id');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('DII_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DII_users', function (Blueprint $table) {
            //
        });
    }
}
