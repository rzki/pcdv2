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
        Schema::create('attendance_p4', function (Blueprint $table) {
            $table->id();
            $table->string('dept');
            $table->string('shift');
            $table->string('total_mp');
            $table->string('plan');
            $table->string('act');
            $table->string('p_m');
            $table->string('percent');
            $table->string('add_mp')->nullable();
            $table->string('total_add_mp');
            $table->string('percent2');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p4-attendance');
    }
};
