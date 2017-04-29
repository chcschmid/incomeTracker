<?php

use Illuminate\Database\Seeder;

class IncomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paycheck')->insert([
        	[
        		'individual' => 'Christiaan',
        		'amount' => 500,
        		'tithing' => 50,
        		'savings' => 50,
        		'tithingPaid' => true,
        		'savingsTransferred' => true,
        		'employer' => 'EPCO'
        	]
        ]);
    }
}
