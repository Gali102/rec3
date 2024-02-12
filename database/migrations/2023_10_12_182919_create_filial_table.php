<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilialTable extends Migration
{
    public function up()
    {
        Schema::create('filials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->integer('company_id');
            $table->string('slug');
            $table->integer('city_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('filials');
    }
}
