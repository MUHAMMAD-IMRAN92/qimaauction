<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class AddDataToAgreementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agreements', function (Blueprint $table) {  
        });
        DB::table('agreements')->insert(
            [
                'title'      => 'Privacy Policy',
                'slug'     => 'privacy-policy',
            ]  
        );
        DB::table('agreements')->insert(
            [
                'title'      => 'Terms & condition',
                'slug'     => 'terms-condition',
            ]   
        );
        DB::table('agreements')->insert(
            [
                'title'      => 'Bidding Agreement',
                'slug'     => 'bidding-agreement',
            ]     
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
