<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFetchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fetches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gameId');
            $table->string('Sport');
            $table->string('Team');
            $table->float('Odd');
            $table->mediumText('Outcome');
            $table->string('userEmail');
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
        Schema::dropIfExists('fetches');
    }
}
