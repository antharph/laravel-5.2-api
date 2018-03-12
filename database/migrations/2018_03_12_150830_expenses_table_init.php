<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExpensesTableInit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $expenses = array(
            array(
                "name" => 'Fine',
                "expensed_code" => 'fine'
            ), 
            array(
                "name" => 'Insurance',
                "expensed_code" => 'insurance'
            ),
            array(
                "name" => 'MOT',
                "expensed_code" => 'mot'
            ),
            array(
                "name" => 'Parking',
                "expensed_code" => 'parking'
            ),
            array(
                "name" => 'Tax',
                "expensed_code" => 'tax'
            ),
            array(
                "name" => 'Toll',
                "expensed_code" => 'toll'
            ),     
        );

        DB::table('expenses')->insert($expenses);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('expenses')->truncate();
    }
}
