<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{

    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->integer('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('form');
            $table->string('total_points');
            $table->string('influence');
            $table->string('creativity');
            $table->string('threat');
            $table->string('ict_index');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
