<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionsTable extends Migration
{

    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->longText('header_description');
            $table->longText('body_description');
            $table->longText('footer_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('descriptions');
    }
}
