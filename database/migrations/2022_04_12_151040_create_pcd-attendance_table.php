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
        Schema::create('attendance_pcd', function (Blueprint $table) {
            $table->id();
            $table->string('npk');
            $table->string('name');
            $table->string('division')->nullable();
            $table->string('dept')->nullable();
            $table->string('section')->nullable();
            $table->string('position');
            $table->string('shift');
            $table->time('time')->nullable();
            $table->date('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcd-attendance');
    }
};
