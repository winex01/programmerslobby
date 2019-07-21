<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationBreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('data_types')->truncate();
        DB::table('data_rows')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    	
        // php artisan iseed data_types,data_rows --classnameprefix=AppBread --force
        $this->call(AppBreadDataTypesTableSeeder::class);
        $this->call(AppBreadDataRowsTableSeeder::class);
    }
}
