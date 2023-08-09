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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('npk')->unique();
            $table->string('password');
            $table->string('role')->default('member');
            $table->string('image')->nullable();
            $table->string('division')->nullable();
            $table->string('dept')->nullable();
            $table->string('position')->nullable();
            $table->string('section')->nullable();
            $table->string('shift')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
