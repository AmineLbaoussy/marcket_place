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
            $table->id();
            $table->string('name');
            $table->string('lname')->nullable();
            $table->string('fname')->nullable();
            $table->string('email')->unique();
            $table->string('password');

            $table->integer('role');//1 Admin  2 Moderator  3 User
            $table->date('birthday')->nullable();
            $table->enum('gender', [NULL,'male','female'])->default(NULL)->nullable();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            
            $table->dateTime('deleted_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
