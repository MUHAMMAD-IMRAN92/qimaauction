<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOriginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origins', function (Blueprint $table) {
            $table->id();
            $table->string('region_name')->nullable();
            $table->string('region_description' , 255)->nullable();
            $table->string('region_image')->nullable();
            $table->enum('is_hidden', [0,1])->default(0);
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
        Schema::dropIfExists('origins');
    }
}
