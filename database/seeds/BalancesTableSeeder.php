<?php

use Illuminate\Database\Seeder;
use App\Balance;

class BalancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
       $Balances = [
           [2000,Carbon\Carbon::create('2017', '11', '20')],
       ];

       $count = count($Balances);

       foreach ($Balances as $key => $Balances) {
           Balance::insert([
               'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
            'amount'=>$Balances[0],
              'date'=>$Balances[1],
           ]);
           $count--;
       }
   }
}
