<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Qima',
            'email'     => 'qima@gmail.com',
            'phone_no'  => '042789732',
            'bid_limit' => '5',
            'is_admin'  => '0',
            'password'  => Hash::make('password'),
        ]);
    }
}
