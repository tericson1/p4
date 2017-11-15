<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentmoneysTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('currentmoneys', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();

      $table->float('amountcurrent');
      $table->date('currentasofdate');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('currentmoneys');
  }
}
