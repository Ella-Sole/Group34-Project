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
            //$table->integer('login_info')->unique('fkLoginDetails');
            $table->foreignId('users_id')->constrained('users');
            $table->integer('personal_details_info')->unique('fkPersonalDetails');
            $table->integer('payment_method');
            $table->integer('purchase_history');
            $table->enum('user_status', ['Normal', 'Admin'])->default('Normal');
            
            //$table->foreign('login_info', 'fkLoginDetails')->references('id')->on('users');
            $table->foreign('payment_method', 'fkPaymentMethod')->references('payment_method_id')->on('payment_method');
            $table->foreign('personal_details_info', 'fkPersonalDetails')->references('personal_details_id')->on('personal_details');
            $table->foreign('purchase_history', 'fkPurchaseHistory')->references('receipt_id')->on('purchase_history');
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
