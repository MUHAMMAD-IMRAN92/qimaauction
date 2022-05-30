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
            $table->unsignedBigInteger('jury_id')->nullable();
            // $table->unsignedBigInteger('auction_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('samples')->nullable();
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
