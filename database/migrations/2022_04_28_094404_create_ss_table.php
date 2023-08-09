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
        Schema::create('best_ss', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('npk');
            $table->string('name');
            $table->string('nilai');
            $table->date('tgl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('best_ss');
    }
};
