<?php

use Illuminate\Database\Seeder;
use App\Bill;
use App\Categorie;

class BillCategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
    
       $bills =[
           'Mortgage' => ['home', 'loans'],
           'National Grid' => ['home', 'utilities'],
           'Macys' => ['credit cards', 'personal']
       ];


       foreach ($bills as $source => $categories) {

           $bill = Bill::where('source', 'like', $source)->first();

           foreach ($categories as $categorieName) {
               $categorie = Categorie::where('name', 'LIKE', $categorieName)->first();

               $bill->categories()->save($categorie);
           }
       }
   }
}
