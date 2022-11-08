<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsstaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('mscustomers')) {
            Schema::create('msstaffs', function (Blueprint $table) {
                $table->unsignedBigInteger('staffID');
                $table->string('staffNama', 100);
                $table->string('staffPosisi', 15);
                $table->string('staffAlamat', 150);
                $table->string('staffEmail', 50);
                $table->string('staffPhone', 15);
                $table->timestamps();
                $table->unique(['staffID']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msstaffs');
    }
}