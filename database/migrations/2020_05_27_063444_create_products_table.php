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
            $table->id('product_id');
            $table->string('product_platform_name');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_preview');   
            $table->string('product_status');          
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('empty_1')->nullable();
            $table->string('empty_2')->nullable();
            $table->string('empty_3')->nullable();
            $table->string('empty_4')->nullable();
            $table->string('empty_5')->nullable();
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
