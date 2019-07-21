<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('menus')->truncate();
        DB::table('menu_items')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

       
        // php artisan iseed menus,menu_items --classnameprefix=AppMenu --force
        $this->call(AppMenuMenusTableSeeder::class);
        $this->call(AppMenuMenuItemsTableSeeder::class);
    }
}
