<?php

use Illuminate\Database\Seeder;

class AppMenuMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 09:58:57',
            ),
        ));
        
        
    }
}