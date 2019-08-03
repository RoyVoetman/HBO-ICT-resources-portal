<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Models\User;
use \Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
    
        User::create([
            'name' => 'admin',
            'email' => 'info@learnandbelieve.nl',
            'password' => Hash::make(']2Yt&7nPMdeC5e&Q')
        ]);
    }
}
