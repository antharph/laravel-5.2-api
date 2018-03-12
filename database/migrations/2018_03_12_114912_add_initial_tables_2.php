<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInitialTables2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->nullable();
            $table->string('service_code',100)->nullable();
            $table->string('description',255)->nullable();
        });

        $services = array(
            array(
                "name" => 'Engine Oil',
                "service_code" => 'engine_oil'
            ), 
            array(
                "name" => 'Battery',
                "service_code" => 'battery'
            ),
            array(
                "name" => 'Tire Rotation',
                "service_code" => 'tire_rotation'
            ),
            array(
                "name" => 'Wheel Alignment',
                "service_code" => 'wheel_alignent'
            ),
            array(
                "name" => 'Spark Plugs',
                "service_code" => 'spark_plugs'
            ),
            array(
                "name" => 'Time Belt',
                "service_code" => 'timing_belt'
            ),      
        );
        DB::table('services')->insert($services);

        Schema::create('service_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->string('details',255)->nullable();
            $table->float('amount', 8, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->nullable();
            $table->string('expensed_code',100)->nullable();
            $table->string('description',255)->nullable();
        });

        Schema::create('car_expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->nullable();
            $table->integer('expense_id')->nullable();
            $table->string('details',255)->nullable();
            $table->float('amount', 8, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('service_reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->nullable();
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
        Schema::drop('services');
        
    }
}
