<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInitialTables4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expense_reminders', function ($table) {
            $table->timestamps();
        });

        Schema::table('service_reminders', function ($table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expense_reminders', function ($table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });

        Schema::table('service_reminders', function ($table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
    }
}
