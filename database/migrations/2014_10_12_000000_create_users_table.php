<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_type');
            $table->string('username', 20);
            $table->string('password', 100);
            $table->string('email')->unique();
            $table->string('about', 150)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
