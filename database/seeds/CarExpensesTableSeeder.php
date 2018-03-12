<?php

use Illuminate\Database\Seeder;

class CarExpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car_expenses = [
            array(
                'car_id' => '1',
                'expense_id' => '1',
                'details' => str_random(10),
                'amount' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'car_id' => '1',
                'expense_id' => '2',
                'details' => str_random(10),
                'amount' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'car_id' => '2',
                'expense_id' => '1',
                'details' => str_random(10),
                'amount' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'car_id' => '1',
                'expense_id' => '3',
                'details' => str_random(10),
                'amount' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'car_id' => '2',
                'expense_id' => '3',
                'details' => str_random(10),
                'amount' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        ];

        DB::table('car_expenses')->insert($car_expenses);
    }
}
