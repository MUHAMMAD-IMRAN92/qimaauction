<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAfterTasteColumnToCuppings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('open_cupping_reviews', function (Blueprint $table) {
            $table->float('after_taste',8,2)->default(0)->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('open_cupping_reviews', function (Blueprint $table) {
            $table->float('after_taste',8,2)->default(0)->nullable();  
        });
    }
}
