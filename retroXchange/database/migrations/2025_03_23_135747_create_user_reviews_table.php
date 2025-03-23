<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reviews', function (Blueprint $table) {
            $table->integer('review_id')->primary()->autoIncrement();
            $table->integer('game_reviewed');
            $table->enum('rating', ['1', '2', '3', '4', '5']);
            $table->string('review', 9999);
            
            $table->foreign('game_reviewed', 'fkItemIdForReview')->references('item_id')->on('items_for_sale')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_reviews');
    }
}
