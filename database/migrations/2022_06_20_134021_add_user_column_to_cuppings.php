<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserColumnToCuppings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('open_cuppings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('open_cuppings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default(0)->nullable();
        });
    }
}
