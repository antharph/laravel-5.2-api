<?php

use Illuminate\Database\Seeder;

class ServiceLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service_logs = [
            array(
                'car_id' => '1',
                'service_id' => '1',
                'details' => str_random(10),
                'amount' => '2000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'car_id' => '2',
                'service_id' => '1',
                'details' => str_random(10),
                'amount' => '2000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'car_id' => '1',
                'service_id' => '2',
                'details' => str_random(10),
                'amount' => '2000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'car_id' => '1',
                'service_id' => '3',
                'details' => str_random(10),
                'amount' => '2000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        ];

        DB::table('service_logs')->insert($service_logs);
    }
}
