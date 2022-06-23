<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agreements')->insert(
            [
                'title'      => 'Privacy Policy',
                'slug'     => 'Privacy-Policy',
            ]  
        );
        DB::table('agreements')->insert(
            [
                'title'      => 'Terms & condition',
                'slug'     => 'Terms-Condition',
            ]   
        );
        DB::table('agreements')->insert(
            [
                'title'      => 'Bidding Contract',
                'slug'     => 'Bidding-Contract',
            ]     
        );
    }
}
