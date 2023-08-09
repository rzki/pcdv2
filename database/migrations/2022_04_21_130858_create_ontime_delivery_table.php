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
        Schema::create('ontime_delivery', function (Blueprint $table) {
            $table->id();
            $table->date('tgl');
            $table->string('plan');
            $table->string('ot_adv');
            $table->string('delay');
            $table->string('plan_percent');
            $table->string('ot_percent');
            $table->string('delay_percent');
            $table->string('plant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otd');
    }
};
