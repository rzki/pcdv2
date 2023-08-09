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
        Schema::create('monthly_total_permodel', function (Blueprint $table) {
            $table->id();
            $table->date('tgl')->nullable();
            $table->string('model')->nullable();
            $table->string('volume')->nullable();
            $table->string('plant')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_total_permodel');
    }
};
