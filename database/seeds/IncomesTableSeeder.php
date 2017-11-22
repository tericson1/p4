<?php

use Illuminate\Database\Seeder;
use App\Incomes;

class IncomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
       $Incomes = [
           ['Job',1500,Carbon\Carbon::create('2017', '11', '29')],
           ['Venmo',50,Carbon\Carbon::create('2017', '11', '25')],
           ['Tax Return', 3000,Carbon\Carbon::create('2018', '03', '02')],
           ['Commission', 500,Carbon\Carbon::create('2017', '12', '25')],
       ];

       $count = count($Incomes);

       foreach ($Incomes as $key => $Incomes) {
           Incomes::insert([
               'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
               'source'=>$Incomes[0],
            'amount'=>$Incomes[1],
              'daterecieved'=>$Incomes[2],

           ]);
           $count--;
       }
   }
}
