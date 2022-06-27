<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Storage;
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
        Storage::disk('public')->put('agreement0', 'Description');
        DB::table('agreements')->insert(
            [
                'title'      => 'Terms & condition',
                'slug'     => 'Terms-Condition',
            ]
        );
        Storage::disk('public')->put('agreement1', 'Description');
        DB::table('agreements')->insert(
            [
                'title'      => 'Bidding Contract',
                'slug'     => 'Bidding-Contract',
            ]
        );
        Storage::disk('public')->put('agreement2', 'Description');
    }
}
