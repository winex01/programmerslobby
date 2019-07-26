<?php

use Illuminate\Database\Seeder;

class AppPermissionRolesRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-07-21 01:58:57',
                'updated_at' => '2019-07-21 01:58:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2019-07-21 01:58:57',
                'updated_at' => '2019-07-21 01:58:57',
            ),
        ));
        
        
    }
}