<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhyTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NHY_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('amount');
            $table->unsignedBigInteger('account_id');
            $table->timestamps();

            // Foreing keys
            $table->foreign('account_id')->references('id')->on('NHY_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('NHY_transactions', function (Blueprint $table) {
            $table->dropForeign(['account_id']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('NHY_transactions');
        Schema::enableForeignKeyConstraints();
    }
}
