2022_11_05_114837_create_mscustomers_table

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMscustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('mscustomers')) {
            Schema::create('mscustomers', function (Blueprint $table) {

                $table->bigIncrements('customerID');
                $table->string('customerNama', 100);
                $table->string('customerAlamat', 150);
                $table->string('customerEmail', 50);
                $table->string('customerPhone', 15);
                $table->timestamps();
                $table->unique(['customerID']);
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
        Schema::dropIfExists('mscustomers');
    }
}