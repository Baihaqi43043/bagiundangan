<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtransaksis', function (Blueprint $table) {
            $table->unsignedBigInteger('salesID');
            $table->foreign('salesID')->references('salesID')->on('htransaksis');
            $table->unsignedBigInteger('produkID');
            $table->foreign('produkID')->references('produkID')->on('msproduks');
            $table->integer('quantity', 5);
            $table->unique(['salesID', 'produkID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransaksis');
    }
}