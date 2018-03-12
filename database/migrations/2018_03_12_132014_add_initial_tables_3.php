<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInitialTables3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('expense_id')->nullable();
            $table->integer('car_id')->nullable();
            $table->integer('base_odometer')->comment('kilometers')->nullable();
            $table->date('base_date')->nullable();
            $table->integer('odometer')->comment('kilometers')->nullable();
            $table->integer('days')->nullable();
            $table->integer('priority')->comment('1 - Whichever comes first, null - no reminder')->nullable();
            $table->integer('status')->comment('1 - Reminder sent, null - no reminded')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('expense_reminders');
    }
}
