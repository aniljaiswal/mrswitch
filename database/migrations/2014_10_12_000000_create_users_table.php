<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('mobile', 10)->unique();
            $table->string('address');
            $table->string('email', 150)->unique();
            $table->string('password', 60);
            $table->boolean('email_verified')->default(false);
            $table->string('email_token')->nullable();
            $table->string('gender', 6);
            $table->date('birthday');
            $table->string('facebookUrl')->nullable();
            $table->string('twitterUrl')->nullable();
            $table->string('gplusUrl')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
