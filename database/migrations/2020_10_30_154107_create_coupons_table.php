<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_name')->nullable()->default(null);
            $table->string('coupon_code');
            $table->integer('percentage')->nullable();
            $table->float('amount')->nullable();
            $table->string('amount_type')->nullable();
            //$table->timestamp('active_from')->nullable()->default(null);
            //$table->timestamp('active_till')->nullable()->default(null);
            $table->datetime('active_date')->nullable();
            $table->datetime('expiry_date')->nullable();
            $table->string('description')->nullable()->default(null);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('coupons');
    }
}
