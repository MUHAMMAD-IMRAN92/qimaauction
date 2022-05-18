<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('farm')->nullable();
            $table->string('rank')->nullable();
            $table->integer('size')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('score')->nullable();
            $table->decimal('increment_bid_price', 8, 2);
            $table->decimal('start_bid_price', 8, 2);
            $table->decimal('reserved_bid_price', 8, 2);
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('startDate')->nullable();
            $table->string('startTime')->nullable();
            $table->string('endDate')->nullable();
            $table->string('endTime')->nullable();
            $table->boolean('is_hidden')->default(0);
            $table->string('product_detail')->nullable();
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
        Schema::dropIfExists('auctions');
    }
}
