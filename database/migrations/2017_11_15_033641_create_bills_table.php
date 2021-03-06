<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('bills', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();

      $table->string('source');
      $table->float('amount');
      $table->date('due');
      $table->boolean('paid');

    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('bills');
  }
}
