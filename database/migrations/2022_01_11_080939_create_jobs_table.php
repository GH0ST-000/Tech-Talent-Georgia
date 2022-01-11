<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('company_logo');
            $table->string('short_description');
            $table->string('company_name');
            $table->string('tags');
            $table->string('salary');
            $table->longText('long_description');
            $table->string('fields');
            $table->string('location');
            $table->string('seniority');
            $table->string('category');
            $table->string('commitment');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
