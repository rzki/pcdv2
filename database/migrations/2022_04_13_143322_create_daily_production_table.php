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
        Schema::create('daily_production', function (Blueprint $table) {
            $table->id();
            $table->date('tgl')->nullable();
            $table->string('plan')->nullable();
            $table->string('actual')->nullable();
            $table->string('plus_minus')->nullable();
            $table->string('line')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dpr_1');
    }
};
