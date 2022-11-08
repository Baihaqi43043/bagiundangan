<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('htransaksis', function (Blueprint $table) {
            $table->bigIncrements('salesID');
            $table->date('salesDate');
            $table->unsignedBigInteger('customerID');
            $table->foreign('customerID')->references('customerID')->on('mscustomers');
            $table->unsignedBigInteger('staffID');
            $table->foreign('staffID')->references('staffID')->on('msstaffs');

            $table->timestamps();
            $table->unique(['salesID', 'customerID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('htransaksis', function (Blueprint $table) {
            $table->dropForeign('customerID');
            $table->dropForeign('staffID');
            $table->dropColumn('customerID');
            $table->dropColumn('staffID');
        });
    }
}