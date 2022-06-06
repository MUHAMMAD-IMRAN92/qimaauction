<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
           $table->string('sample')->nullable(); 
           $table->integer('postion')->nullable(); 
           $table->integer('table')->nullable(); 
           $table->unsignedBigInteger('governorate_id')->nullable();
           $table->unsignedBigInteger('village_id')->nullable();
           $table->unsignedBigInteger('region_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
           $table->string('sample')->nullable(); 
           $table->integer('postion')->nullable(); 
           $table->integer('table')->nullable(); 
           $table->unsignedBigInteger('governorate_id')->nullable();
           $table->unsignedBigInteger('village_id')->nullable();
           $table->unsignedBigInteger('region_id')->nullable();
        });
    }
}
