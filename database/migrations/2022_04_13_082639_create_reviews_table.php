<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('defect'); 
            $table->integer('roast')->default(0)->nullable(); 
            $table->float('aroma_dry',8,2)->default(0)->nullable();     
            $table->float('aroma_crust',8,2)->default(0)->nullable();     
            $table->float('aroma_break',8,2)->default(0)->nullable();  
            $table->string('aroma_note')->nullable();     
            $table->float('color_dev',8,2)->default(0)->nullable();     
            $table->float('clean_up',8,2)->default(0)->nullable();     
            $table->float('sweetness',8,2)->default(0)->nullable();  
            $table->string('defects_note')->nullable();  
            $table->string('clean_sweet_note')->nullable();   
            $table->float('acidity',8,2)->default(0)->nullable();  
            $table->string('acidity_chk')->nullable();   
            $table->string('fm_chk')->nullable(); 
            $table->string('discriptor')->nullable();
            $table->float('mouth_feel',8,2)->default(0)->nullable();         
            $table->float('flavour',8,2)->default(0)->nullable();  
            $table->string('flavor_note')->nullable();     
            $table->float('after_taste',8,2)->default(0)->nullable();     
            $table->float('balance',8,2)->default(0)->nullable();     
            $table->integer('first_number')->default(0)->nullable(); 
            $table->integer('second_number')->default(0)->nullable(); 
            $table->float('overall',8,2)->default(0)->nullable();     
            $table->float('total_score',8,2)->default(0)->nullable();     
            $table->unsignedBigInteger('jury_id')->nullable();
            $table->unsignedBigInteger('sample_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
