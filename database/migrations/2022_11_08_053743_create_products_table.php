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
            $table->foreignId('department_id');
            $table->foreignId('category_id');
            $table->string('name');
            $table->string('brand')->nullable();
            $table->string('size');
            $table->string('coller')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('material')->nullable();
            $table->string('material_style')->nullable();
            $table->string('type')->nullable();
            $table->float('price');
            $table->string('colour');
            $table->string('image')->nullable();
            $table->string('actual_filename')->nullable();
            $table->string('extension')->nullable();
            $table->timestamps();

            
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
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
