<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Adds the master user to the User table
        $user = env('ADMIN_USER', '');
        $pass = env('ADMIN_PASS', '');
        $email = env('ADMIN_EMAIL', '');

        if(!(empty($user) || empty($pass) || empty($email))) {
            DB::table('users')->insert([
                'name' => $user,
                'email' => $email,
                'password' => bcrypt($pass)
            ]);
        }
    }
}
