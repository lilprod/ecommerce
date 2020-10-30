<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('users_email',100)->nullable();
            $table->string('name',100)->nullable();
            $table->string('firstname',100)->nullable();
            $table->string('address')->nullable();
            $table->string('city',100)->nullable();
            $table->string('state',100)->nullable();
            $table->string('pincode',100)->nullable();
            $table->string('country',100)->nullable();
            $table->string('mobile',100)->nullable();
            $table->float('shipping_charges')->nullable();
            $table->string('coupon_code',100)->nullable();
            $table->string('coupon_amount',100)->nullable();
            $table->string('order_status',100)->nullable();
            $table->string('payment_method',100)->nullable();
            $table->string('grand_total',100)->nullable();
            $table->string('shipping_option')->nullable();
            $table->string('track_code')->nullable()->default(null);
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
        Schema::dropIfExists('orders');
    }
}
