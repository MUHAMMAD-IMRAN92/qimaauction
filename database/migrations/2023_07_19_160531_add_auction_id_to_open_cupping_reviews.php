<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuctionIdToOpenCuppingReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('open_cupping_reviews', function (Blueprint $table) {
            $table->integer('auction_id')->nullable();
            $table->integer('sample_code')->nullable();
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
            $table->dropColumn('auction_id');
            $table->dropColumn('sample_code');
        });
    }
}
