<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_total', function (Blueprint $table) {
            $table->id();
            $table->date('tgl')->nullable();
            $table->string('volume_total')->nullable();
            $table->string('volume_sap')->nullable();
            $table->string('volume_kap')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_total');
    }
};
