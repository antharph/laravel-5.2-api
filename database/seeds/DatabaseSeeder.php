<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CarTableSeeder::class);
        $this->call(CarExpensesTableSeeder::class);
        $this->call(ExpenseRemindersTableSeeder::class);
        $this->call(ServiceLogTableSeeder::class);
        $this->call(ServiceRemindersTableSeeder::class);
    }
}
