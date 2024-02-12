<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTable extends Migration
{
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('personal_id');
            $table->integer('service_id');
            $table->string('value');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prices');
    }
}

