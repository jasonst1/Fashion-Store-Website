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
            $table->string('id');
            $table->string('username');
            $table->boolean('Type')->nullable();
            $table->dateTime('DOB')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Email')->unique();
            $table->timestamp('RegisteredAt');
            $table->string('PhoneNumber')->nullable();
            $table->string('ProfileImage')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Password');
            $table->rememberToken();
            $table->timestamps();
            $table->primary(['id']);
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
