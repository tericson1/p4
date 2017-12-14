<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
       $categories = ['business', 'loans', 'credit cards', 'personal','utilities','home'];

       foreach ($categories as $categorieName) {
           $categorie = new Categorie();
           $categorie->name = $categorieName;
           $categorie->save();
       }
   }
}
