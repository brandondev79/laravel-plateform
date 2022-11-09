<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');

            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->date('birthday')->nullable();
            $table->string('post')->nullable();
            $table->date('seniority')->nullable();
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->unsignedTinyInteger('year_of_experience')->nullable();
            $table->unsignedTinyInteger('english')->nullable();
            $table->string('other_language')->nullable();
            $table->boolean('on_mission')->nullable();
            $table->text('comments')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedTinyInteger('type')->default(1);
            $table->string('image_name')->nullable();
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
