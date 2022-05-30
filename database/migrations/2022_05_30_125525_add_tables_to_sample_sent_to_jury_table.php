<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTablesToSampleSentToJuryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sample_sent_to_jury', function (Blueprint $table) {
             $table->unsignedBigInteger('tables')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sample_sent_to_jury', function (Blueprint $table) {
             $table->unsignedBigInteger('tables')->nullable();
        });
    }
}
