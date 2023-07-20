<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesColumnToOpenCuppingReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('open_cupping_reviews', function (Blueprint $table) {
            $table->string('aroma_note')->nullable();
            $table->string('roast_color_note')->nullable();
            $table->string('acidity_note')->nullable();
            $table->string('flavour_note')->nullable();
            $table->string('afetr_taste')->nullable();
            $table->string('body_note')->nullable();
            $table->string('balance_note')->nullable();
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
            $table->dropColumn('aroma_note');
            $table->dropColumn('roast_color_note');
            $table->dropColumn('acidity_note');
            $table->dropColumn('flavour_note');
            $table->dropColumn('afetr_taste');
            $table->dropColumn('body');
            $table->dropColumn('balance');
        });
    }
}
