<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_categorie', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();


   $table->integer('bill_id')->unsigned();
        $table->integer('categorie_id')->unsigned();

        # Make foreign keys
        $table->foreign('bill_id')->references('id')->on('bills');
        $table->foreign('categorie_id')->references('id')->on('categories');
      });
  }

    public function down()
    {
        Schema::dropIfExists('bill_categorie');
    }
}
