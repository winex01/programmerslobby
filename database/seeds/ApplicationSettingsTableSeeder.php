<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(
            array(
                'role_id' => 2,
                'name' => 'Guest',
                'email' => 'guest@test.com',
                'avatar' => 'users/default.png',
                'password' => 'just_some_random_string'
            )
        );
    }
}
