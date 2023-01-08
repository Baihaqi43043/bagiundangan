<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsproduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msproduks', function (Blueprint $table) {
            $table->bigIncrements('produkID');
            $table->string('produkName', 200);
            $table->string('file_path');
            $table->string('jenisProduk', 40);
            $table->string('demoProduk', 230);
            $table->timestamps();
            $table->unique('produkID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msproduks');
    }
}