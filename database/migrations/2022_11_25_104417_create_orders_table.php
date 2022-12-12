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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('item_count');
            $table->float('total_price');
            $table->datetime('delivery_date');
            $table->enum('status',['pending','processing','completed','decline']);
            $table->boolean('is_paid')->default(false);
            $table->enum('payment_method',['cash on delivery'])->default('cash on delivery');
            $table->foreignId('customer_id')->nullable();
           
            $table->timestamps();
            
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
