<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('car_brand_id')->nullable();
            $table->string('model',20)->nullable();
            $table->integer('year')->nullable();
            $table->string('chassis_number',50)->nullable();
            $table->string('registration_number',20)->nullable();
            $table->string('color',20)->nullable();
            $table->string('engine_number',20)->nullable();
            $table->timestamps();
        });
        
        Schema::create('car_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand_code',30)->nullable();
            $table->string('brand',30)->nullable();
            $table->timestamps();
        });
               
        $brands = array(
            array(
                "brand_code" => 'toyota',
                "brand" => 'Toyota'
            ),
            array(
                "brand_code" => 'mitsubishi',
                "brand" => 'Mitsubishi'
            ),
            array(
                "brand_code" => 'suzuki',
                "brand" => 'Suzuki'
            ),
            array(
                "brand_code" => 'isuzu',
                "brand" => 'isuzu'
            ),
            array(
                "brand_code" => 'honda',
                "brand" => 'Honda'
            ),
            array(
                "brand_code" => 'hyundai',
                "brand" => 'Hyundai'
            ),
            array(
                "brand_code" => 'nissan',
                "brand" => 'Nissan'
            ),
            array(
                "brand_code" => 'kia',
                "brand" => 'Kia'
            ),
            array(
                "brand_code" => 'ford',
                "brand" => 'Ford'
            ),
            array(
                "brand_code" => 'mazda',
                "brand" => 'Mazda'
            ),
            array(
                "brand_code" => 'chevrolet',
                "brand" => 'Chevrolet'
            ),
            array(
                "brand_code" => 'bmw',
                "brand" => 'BMW'
            ),
            array(
                "brand_code" => 'mercedes_benz',
                "brand" => 'Mercedes Benz'
            ),array(
                "brand_code" => 'hummer',
                "brand" => 'Hummer'
            ),
            array(
                "brand_code" => 'subaru',
                "brand" => 'Subaru'
            ),
            array(
                "brand_code" => 'volkswagen',
                "brand" => 'Volkswagen'
            ),
            array(
                "brand_code" => 'lexus',
                "brand" => 'Lexus'
            ),
            
        );
        DB::table('car_brands')->insert($brands);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
        Schema::drop('car_brands');
    }
}
