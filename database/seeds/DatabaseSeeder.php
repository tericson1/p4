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
        $this->call(BalancesTableSeeder::class);
       $this->call(IncomesTableSeeder::class);
       $this->call(BillsTableSeeder::class);
       $this->call(CategoriesTableSeeder::class);
       $this->call(BillCategorieTableSeeder::class);
     }
}
