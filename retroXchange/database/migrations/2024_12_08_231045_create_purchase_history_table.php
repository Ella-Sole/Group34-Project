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
            $table->integer('receipt_id')->primary()->autoIncrement();
            $table->integer('purchased_item');
            $table->dateTime('date_of_purchase');
            $table->enum('purchase_status', ['purchased', 'out for delivery', 'delivered', 'returned', 'not delivered/shipment lost']);
            
            $table->foreign('purchased_item', 'fkPurchasedItem')->references('item_id')->on('items_for_sale');
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
