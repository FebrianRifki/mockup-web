<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadHystorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('download_hystorys', function (Blueprint $table) {
            $table->id('download_id');
            $table->foreignId('download_user_id')->references('user_id')->on('users')
            ->onDelete('cascade')
            ->nullable();
            $table->foreignId('download_product_id')->unsigned()
            ->nullable()
            ->references('product_id')
            ->on('products')
            ->onDelete('cascade');      
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
        Schema::dropIfExists('download_hystorys');
    }
}
