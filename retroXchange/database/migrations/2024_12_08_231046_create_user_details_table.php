<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->integer('details_id')->primary()->autoIncrement();
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->integer('personal_details_info')->unique('fkPersonalDetails')->nullable();
            $table->integer('payment_method')->nullable();

            $table->foreign('payment_method', 'fkPaymentMethod')->references('payment_method_id')->on('payment_method')->onDelete('cascade');
            $table->foreign('personal_details_info', 'fkPersonalDetails')->references('personal_details_id')->on('personal_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
