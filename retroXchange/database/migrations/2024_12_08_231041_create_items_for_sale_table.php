<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsForSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_for_sale', function (Blueprint $table) {
            $table->integer('item_id')->primary()->autoIncrement();
            $table->decimal('item_price', 10, 2);
            $table->string('item_name', 100);
            $table->integer('item_stock');
            $table->string('item_image');
            $table->text('item_description')->nullable();
            $table->enum('category', [
                'ps3', 'ps3 console', 'ps4', 'ps4 console', 'xbox one', 'xbox one console', 
                'xbox 360', 'xbox 360 console', 'switch', 'switch console', '3ds', '2ds', 
                'ds', 'gameboy colour', 'xbox', 'psp', 'psvita', 'wii', 'wii console', 'wiiu'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_for_sale');
    }
}
