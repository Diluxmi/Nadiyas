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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sales_id');
            $table->date('pay_date');
            $table->string('pay_mode');
            $table->decimal('amount');
            $table->enum('pay_status',['pending','processing','completed','decline']);
            $table->date('cheque_date')->nullable();
            $table->timestamps();

            $table->foreign('sales_id')->references('id')->on('sales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations. a
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
