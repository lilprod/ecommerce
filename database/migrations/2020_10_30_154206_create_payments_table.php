<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
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
            $table->integer('order_id');
            $table->integer('customer_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('payer_id')->nullable();
            $table->string('payer_email')->nullable();
            $table->float('amount', 10, 2);
            $table->string('currency')->nullable();
            $table->string('description')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('tx_reference')->nullable();
            $table->dateTime('date_payment')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('identifier')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
