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
        Schema::create('womens', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('size');
            $table->string('style');
            $table->string('material');
            $table->string('materialstyle');
            $table->string('colour');
            $table->string('price');
            $table->string('image')->nullable();
            $table->string('actual_filename')->nullable();
            $table->string('extension')->nullable();
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
        Schema::dropIfExists('womens');
    }
};
