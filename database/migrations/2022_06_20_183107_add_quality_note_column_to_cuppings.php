<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQualityNoteColumnToCuppings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('open_cupping_reviews', function (Blueprint $table) {
            $table->string('quality_notes')->nullable();
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
            $table->string('quality_notes')->nullable();
        });
    }
}
