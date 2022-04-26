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
            $table->string('sample_name')->nullable();
            $table->float('aroma', 8, 2)->default(0)->nullable();
            $table->float('acidity', 8, 2)->default(0)->nullable();
            $table->float('intensity', 8, 2)->default(0)->nullable();
            $table->float('dry', 8, 2)->default(0)->nullable();
            $table->float('break', 8, 2)->default(0)->nullable();
            $table->float('flavour', 8, 2)->default(0)->nullable();
            $table->float('body', 8, 2)->default(0)->nullable();
            $table->float('afterstate', 8, 2)->default(0)->nullable();
            $table->float('balance', 8, 2)->default(0)->nullable();
            $table->float('uniformity', 8, 2)->default(0)->nullable();
            $table->float('clean_cup', 8, 2)->default(0)->nullable();
            $table->float('sweetness', 8, 2)->default(0)->nullable();
            $table->float('defect', 8, 2)->default(0)->nullable();
            $table->float('overall', 8, 2)->default(0)->nullable();
            $table->float('roast', 8, 2)->default(0)->nullable();
            $table->string('message')->nullable();
            $table->float('final_score', 8, 2)->default(0)->nullable();
            $table->unsignedBigInteger('jury_id')->nullable();
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
