<?php

use Carbon\Carbon;
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

        $tags = [
            'PHP', 'HTML', 'Laravel', 'Codeigniter', 'Javascript',
            'Java', 'C#', 'C++', 'Python', 'C', 'Wordpress'
        ];

        foreach ($tags as $tag) {
            \DB::table('tags')->insert(
                array(
                    'description' => $tag,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                )
            );
        }
    }
}
