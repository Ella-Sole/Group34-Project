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

            $table->foreign('purchase_id')->references('purchase_id')->on('purchase_history');
            $table->foreign('item_id')->references('item_id')->on('items_for_sale');
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
