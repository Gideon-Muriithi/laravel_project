<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJanauary2018ChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('janauary2018_charges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('month',100);
            $table->decimal("Previouscharges");
            $table->decimal("Currentcharges");
            $table->decimal('Amountdue');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('janauary2018_charges');
    }
}
