<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToAuctionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auction_products', function (Blueprint $table) {

            $table->string('jury_code')->nullable();
            $table->string('position')->nullable();
            $table->string('table')->nullable();
            $table->string('public_jury_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auction_products', function (Blueprint $table) {
            $table->dropColumn('jury_code');
            $table->dropColumn('position');
            $table->dropColumn('table');
            $table->dropColumn('public_jury_score');

        });
    }
}
