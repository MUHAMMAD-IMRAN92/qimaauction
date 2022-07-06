<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinningCofeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winning_cofees', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->decimal('score');
            $table->integer('rank');
            $table->string('name');
            $table->string('village');
            $table->string('region');
            $table->string('governorate');
            $table->string('altitude');
            $table->string('process');
            $table->string('genetics');
            $table->decimal('quantity');
            $table->integer('farmers');
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
        Schema::dropIfExists('winning_cofees');
    }
}
