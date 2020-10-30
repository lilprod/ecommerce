<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_id');
            $table->string('name');
            $table->string('code');
            $table->string('color')->nullable();
            $table->string('barcode')->nullable()->default(null);
            $table->text('description')->nullable();
            $table->float('price')->nullable();
            $table->string('image')->nullable();
            //$table->tinyInteger('in_stock')->nullable()->default(null);
            //$table->tinyInteger('track_stock')->nullable()->default(null);
            //$table->decimal('qty', 10, 6)->nullable();
            $table->tinyInteger('is_taxable')->nullable()->default(null);
            $table->float('weight')->nullable()->default(null);
            $table->float('width')->nullable()->default(null);
            $table->float('height')->nullable()->default(null);
            $table->float('length')->nullable()->default(null);
            $table->string('meta_title')->nullable()->default(null);
            $table->string('meta_description')->nullable()->default(null);
            //$table->json('properties');
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
        Schema::dropIfExists('products');
    }
}
