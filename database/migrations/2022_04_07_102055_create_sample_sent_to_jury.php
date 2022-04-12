<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleSentToJury extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_sent_to_jury', function (Blueprint $table) {
            $table->id();
            $table->string('jury_id')->nullable();
            $table->foreign('jury_id')->references('id')->on('jury');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('product');
            $table->float('sample_weight')->nullable();
            $table->longText('message')->nullable();
            $table->string('temporary_link')->nullable();
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
        Schema::dropIfExists('sample_sent_to_jury');
    }
}
