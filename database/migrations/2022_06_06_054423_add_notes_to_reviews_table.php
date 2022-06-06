<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesToReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->string('sweetness_note')->nullable();  
            $table->string('acidity_note')->nullable();  
            $table->string('mouthfeel_note')->nullable();   
            $table->string('aftertaste_note')->nullable();  
            $table->string('balance_note')->nullable();  
            $table->string('overall_note')->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->string('sweetness_note')->nullable();  
            $table->string('acidity_note')->nullable();  
            $table->string('mouthfeel_note')->nullable();   
            $table->string('flavor_note')->nullable();  
            $table->string('aftertaste_note')->nullable();  
            $table->string('balance_note')->nullable();  
            $table->string('overall_note')->nullable();  
        });
    }
}
