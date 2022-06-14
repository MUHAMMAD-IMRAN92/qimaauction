<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTypeToInteger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auction_products', function (Blueprint $table) {
            $table->unsignedDecimal('start_price',8,2)->change();
            $table->unsignedDecimal('reserve_price',8,2)->change();
            $table->unsignedDecimal('weight',8,2)->change();
            $table->unsignedDecimal('size',8,2)->change();
            
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
            $table->unsignedDecimal('start_price',8,2)->change();
            $table->unsignedDecimal('reserve_price',8,2)->change();
            $table->unsignedDecimal('weight',8,2)->change();
            $table->unsignedDecimal('size',8,2)->change();
        });
    }
}
