<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_history', function (Blueprint $table) {
            $table->integer('purchase_id')->primary()->autoIncrement();
            $table->foreignId('users_id')->constrained('users');
            $table->decimal('total_price', 10, 0);
            $table->dateTime('date_of_purchase');
            $table->enum('purchase_status', ['purchased', 'out for delivery', 'delivered', 'returned', 'not delivered/shipment lost'])->default('purchased');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_history');
    }
}
