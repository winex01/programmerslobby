<?php

use Illuminate\Database\Seeder;

class AppMenuMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 09:58:57',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Dev Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => NULL,
                'parameters' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 10:20:18',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 10:20:18',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 10:20:18',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 10:20:18',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => 17,
                'order' => 1,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 10:23:35',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => 17,
                'order' => 3,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 17,
                'order' => 2,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 10:23:40',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2019-07-21 09:58:57',
                'updated_at' => '2019-07-21 10:20:18',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Projects',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2019-07-21 10:04:00',
                'updated_at' => '2020-03-08 12:29:42',
                'route' => 'voyager.projects.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Example',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2019-07-21 10:23:25',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Tags',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-milestone',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2019-07-26 21:30:05',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => 'voyager.tags.index',
                'parameters' => NULL,
            ),
            17 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2019-08-24 19:30:33',
                'updated_at' => '2020-03-10 19:04:27',
                'route' => NULL,
                'parameters' => NULL,
            ),
            18 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Blogs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-treasure',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-03-08 12:25:26',
                'updated_at' => '2020-03-08 12:29:42',
                'route' => 'voyager.blogs.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}