<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            array(
                'user_id' => '1',
                'car_brand_id' => '1',
                'model' => str_random(10),
                'year' => '2017',
                'chassis_number' => str_random(10),
                'registration_number' => str_random(10),
                'color' => str_random(10),
                'engine_number' => str_random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'user_id' => '2',
                'car_brand_id' => '2',
                'model' => str_random(10),
                'year' => '2017',
                'chassis_number' => str_random(10),
                'registration_number' => str_random(10),
                'color' => str_random(10),
                'engine_number' => str_random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'user_id' => '3',
                'car_brand_id' => '3',
                'model' => str_random(10),
                'year' => '2017',
                'chassis_number' => str_random(10),
                'registration_number' => str_random(10),
                'color' => str_random(10),
                'engine_number' => str_random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        ];

        DB::table('cars')->insert($cars);
    }
}
