<?php

use Illuminate\Database\Seeder;
use App\Bills;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
       $Bills = [
           ['Bank of America Cash Rewards Credit Card',600.56, Carbon\Carbon::create('2017', '12', '28'),'0'],
           ['National Grid',60.56,Carbon\Carbon::create('2017', '11', '25'), '1'],
           ['Mortgage', 2000.56, Carbon\Carbon::create('2017', '12', '01'), '0'],
           ['Macys', 120.45, Carbon\Carbon::create('2017', '12', '15'), '0'],
           ['Chase Credit Card', 300,Carbon\Carbon::create('2017', '12', '6'), '1'],
       ];

       $count = count($Bills);

       foreach ($Bills as $key => $Bills) {
           Bills::insert([
               'created_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
               'updated_at' => Carbon\Carbon::now()->subDays($count)->toDateTimeString(),
               'source'=>$Bills[0],
            'amount'=>$Bills[1],
              'due'=>$Bills[2],
              'paid'=>$Bills[3],
           ]);
           $count--;
       }
   }
}
