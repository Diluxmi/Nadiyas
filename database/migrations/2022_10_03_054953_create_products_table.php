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
        Schema::create('products', function (Blueprint $table) {

            $table->id();
            $table->enum('department',['women','men','kid','toy','motherandbaby','houseandhold','accessory','cosmetic','ethnic']);
            $table->string('category');
            $table->string('brand');
            $table->string('size');
            $table->string('collar');
            $table->string('sleeve');
            $table->string('material');
            $table->string('type');
            $table->string('price');
            $table->string('colour');
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
        Schema::dropIfExists('products');
    }
};
