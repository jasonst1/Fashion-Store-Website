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
            $table->string('UserID');
            $table->string('Username');
            $table->boolean('Uype');
            $table->dateTime('DOB');
            $table->string('Gender');
            $table->string('Email')->unique();
            $table->timestamp('RegisteredAt');
            $table->string('PhoneNumber');
            $table->string('ProfileImage');
            $table->string('FirstName');
            $table->string('LastName');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Password');
            $table->rememberToken();
            $table->timestamps();
            $table->primary(['UserID']);
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
