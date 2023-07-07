<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAuctionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auction_products', function (Blueprint $table) {
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('village')->nullable();
            $table->string('region')->nullable();
            $table->string('governorate')->nullable();
            $table->string('altitude')->nullable();
            $table->string('process')->nullable();
            $table->string('genetic')->nullable();
            $table->string('qoute')->nullable();
            $table->string('cup_profile')->nullable();
            $table->string('heading_1')->nullable();
            $table->string('heading_2')->nullable();
            $table->string('description_1')->nullable();
            $table->string('description_2')->nullable();
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
            $table->dropColumn('code');
            $table->dropColumn('name');
            $table->dropColumn('village');
            $table->dropColumn('region');
            $table->dropColumn('governorate');
            $table->dropColumn('altitude');
            $table->dropColumn('process');
            $table->dropColumn('genetic');
            $table->dropColumn('qoute');
            $table->dropColumn('cup_profile');
            $table->dropColumn('heading_1');
            $table->dropColumn('heading_2');
            $table->dropColumn('description_1');
            $table->dropColumn('description_2');
        });
    }
}
