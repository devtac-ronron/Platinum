<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class AccountSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'firstname' => 'Ron Arnie',
            'lastname' =>'Diaz',
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);
    }
}
