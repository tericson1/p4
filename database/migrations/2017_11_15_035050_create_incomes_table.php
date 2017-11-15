<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('incomes', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();

      $table->string('incomesource');
      $table->float('incomeamount');
      $table->date('daterecieved');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('incomes');
  }
}
