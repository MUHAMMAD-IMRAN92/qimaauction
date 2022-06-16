<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpenCuppingReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_cupping_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('defect')->default(0)->nullable(); 
            $table->integer('roast')->default(0)->nullable(); 
            $table->float('aroma_dry',8,2)->default(0)->nullable();     
            $table->float('aroma_crust',8,2)->default(0)->nullable();     
            $table->float('aroma_break',8,2)->default(0)->nullable();       
            $table->integer('uniformityvalue')->default(0)->nullable(); 
            $table->integer('cleancupvalue')->default(0)->nullable(); 
            $table->integer('sweetnesvalue')->default(0)->nullable(); 
            $table->integer('manual')->default(0)->nullable();  
            $table->float('acidity',8,2)->default(0)->nullable();  
            $table->float('body',8,2)->default(0)->nullable();  
            $table->string('acidity_chk')->nullable();
            $table->string('body_chk')->nullable();          
            $table->float('flavour',8,2)->default(0)->nullable();  
            $table->string('note')->nullable();         
            $table->float('balance',8,2)->default(0)->nullable();     
            $table->integer('first_number')->default(0)->nullable(); 
            $table->integer('second_number')->default(0)->nullable(); 
            $table->float('overall',8,2)->default(0)->nullable();     
            $table->float('total_score',8,2)->default(0)->nullable();     
            $table->unsignedBigInteger('sample_id')->nullable();
            $table->unsignedBigInteger('user_id')->default(1)->nullable();
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
        Schema::dropIfExists('open_cupping_reviews');
    }
}
