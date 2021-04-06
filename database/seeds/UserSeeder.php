<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; #import database file
use Illuminate\Support\Facades\Hash; #to encrypt the password
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'shashank neupane',
            'email'=>'shashank@neupane.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
