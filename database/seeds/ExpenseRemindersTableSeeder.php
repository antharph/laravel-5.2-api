<?php

use Illuminate\Database\Seeder;

class ExpenseRemindersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expense_reminders = [
            array(
                'expense_id' => '1',
                'car_id' => '1',
                'base_odometer' => '1000',
                'base_date' => date('Y-m-d H:i:s'),
                'odometer' => '2000',
                'days' => '90',
                'priority' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'expense_id' => '1',
                'car_id' => '2',
                'base_odometer' => '1000',
                'base_date' => date('Y-m-d H:i:s'),
                'odometer' => '2000',
                'days' => '90',
                'priority' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'expense_id' => '1',
                'car_id' => '3',
                'base_odometer' => '1000',
                'base_date' => date('Y-m-d H:i:s'),
                'odometer' => '2000',
                'days' => '90',
                'priority' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'expense_id' => '1',
                'car_id' => '4',
                'base_odometer' => '1000',
                'base_date' => date('Y-m-d H:i:s'),
                'odometer' => '2000',
                'days' => '90',
                'priority' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'expense_id' => '1',
                'car_id' => '5',
                'base_odometer' => '1000',
                'base_date' => date('Y-m-d H:i:s'),
                'odometer' => '2000',
                'days' => '90',
                'priority' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        ];

        DB::table('expense_reminders')->insert($expense_reminders);
    }
}
