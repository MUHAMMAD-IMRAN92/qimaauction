<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->unsignedBigInteger('review_id')->nullable();
            $table->unsignedBigInteger('jury_id')->nullable();
            // $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
            // $table->foreign('jury_id')->references('id')->on('juries')->onDelete('cascade');
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
        Schema::dropIfExists('tags');
    }
}
