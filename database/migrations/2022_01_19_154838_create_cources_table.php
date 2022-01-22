<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourcesTable extends Migration
{

    public function up()
    {
        Schema::create('cources', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('company_logo');
            $table->string('short_description');
            $table->string('company_name');
            $table->string('tags');
            $table->string('price');
            $table->longText('long_description');
            $table->string('field');
            $table->string('session');
            $table->string('week');
            $table->string('category');
            $table->string('duration');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cources');
    }
}
