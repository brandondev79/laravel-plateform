<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('skills_categories');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('skill_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('skill_id');
            $table->primary(['user_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
        Schema::dropIfExists('skill_user');
    }
}
