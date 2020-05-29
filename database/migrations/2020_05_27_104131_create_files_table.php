<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id('files_id');
            $table->foreignId('files_product_id')
            ->references('product_id')->on('products')
            ->onDelete('cascade')->nullable();
            $table->string('files_title');
            $table->text('files_description');
            $table->string('file_data');        
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
        Schema::dropIfExists('files');
    }
}
