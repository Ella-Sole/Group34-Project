<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchased_items', function (Blueprint $table) {
            $table->integer('purchase_id');
            $table->integer('item_id');
            $table->enum('purchase_status', ['purchased', 'out for delivery', 'delivered', 'returned', 'not delivered/shipment lost'])->default('purchased');

            $table->foreign('purchase_id')->references('purchase_id')->on('purchase_history')->onDelete('cascade');
            $table->foreign('item_id')->references('item_id')->on('items_for_sale')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchased_items');
    }
};
