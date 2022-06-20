<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpenCuppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_cuppings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('auction_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('samples')->nullable();
            $table->integer('table')->nullable(); 
            $table->integer('postion')->nullable(); 
            $table->enum('is_hidden', [0, 1])->default(0)->nullable();
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
        Schema::dropIfExists('open_cuppings');
    }
}
