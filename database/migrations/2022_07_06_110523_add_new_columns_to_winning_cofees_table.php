<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToWinningCofeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('winning_cofees', function (Blueprint $table) {
        $table->string('quotes')->after('farmers');
        $table->string('cup_profile')->after('quotes');
        $table->longText('farmer_story')->after('cup_profile');
        $table->longText('region_story')->after('farmer_story');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('winning_cofees', function (Blueprint $table) {
            //
        });
    }
}
