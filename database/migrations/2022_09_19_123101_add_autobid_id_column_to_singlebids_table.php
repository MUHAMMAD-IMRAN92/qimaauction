<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAutobidIdColumnToSinglebidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('single_bids', function (Blueprint $table) {
            $table->unsignedBigInteger('autobid_id')->nullable()->after('auction_product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('single_bids', function (Blueprint $table) {
            //
        });
    }
}
