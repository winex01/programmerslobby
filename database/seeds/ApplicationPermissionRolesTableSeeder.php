<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationPermissionRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('permission_role')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // php artisan iseed permissions,roles,permission_role --classnameprefix=AppPermissionRoles --force
        $this->call(AppPermissionRolesPermissionsTableSeeder::class);
        $this->call(AppPermissionRolesRolesTableSeeder::class);
        $this->call(AppPermissionRolesPermissionRoleTableSeeder::class);

    }
}
