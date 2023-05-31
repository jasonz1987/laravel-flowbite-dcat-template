<?php

namespace Database\Seeders;

use App\Models\User;
use Dcat\Admin\Models\Menu;
use Dcat\Admin\Models\Permission;
use Dcat\Admin\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MenuSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Menu::truncate();

        Menu::insert([
                [
                    'id'        => 100,
                    'parent_id' => 0,
                    'order'     => 1,
                    'title'     => '控制台',
                    'icon'      => 'fa-dashboard',
                    'uri'       => '/',
                ],

                [
                    'id'        => 200,
                    'parent_id' => 0,
                    'order'     => 2,
                    'title'     => '工具管理',
                    'icon'      => 'fa-anchor',
                    'uri'       => '/',
                ],
                [
                    'id'        => 201,
                    'parent_id' => 200,
                    'order'     => 1,
                    'title'     => '工具列表',
                    'icon'      => '',
                    'uri'       => 'tools',
                ],
                [
                    'id'        => 202,
                    'parent_id' => 200,
                    'order'     => 2,
                    'title'     => '分类列表',
                    'icon'      => '',
                    'uri'       => 'tool/categories',
                ],
                [
                    'id'        => 203,
                    'parent_id' => 200,
                    'order'     => 3,
                    'title'     => '评论列表',
                    'icon'      => '',
                    'uri'       => 'tool/comments',
                ],
                [
                    'id'        => 204,
                    'parent_id' => 200,
                    'order'     => 4,
                    'title'     => '评分列表',
                    'icon'      => '',
                    'uri'       => 'tool/stars',
                ],

                [
                    'id'        => 300,
                    'parent_id' => 0,
                    'order'     => 3,
                    'title'     => '用户管理',
                    'icon'      => 'fa-users',
                    'uri'       => '/',
                ],
                [
                    'id'        => 301,
                    'parent_id' => 300,
                    'order'     => 1,
                    'title'     => '用户列表',
                    'icon'      => '',
                    'uri'       => 'users',
                ],

                [
                    'id'        => 8000,
                    'parent_id' => 0,
                    'order'     => 80,
                    'title'     => '文章管理',
                    'icon'      => 'fa-rss-square',
                    'uri'       => '/',
                ],
                [
                    'id'        => 8002,
                    'parent_id' => 8000,
                    'order'     => 1,
                    'title'     => '文章列表',
                    'icon'      => '',
                    'uri'       => 'posts',
                ],

                [
                    'id'        => 9900,
                    'parent_id' => 0,
                    'order'     => 99,
                    'title'     => '系统设置',
                    'icon'      => 'fa-gear',
                    'uri'       => '',
                ],
                [
                    'id'        => 9901,
                    'parent_id' => 9900,
                    'order'     => 1,
                    'title'     => '管理员',
                    'icon'      => '',
                    'uri'       => 'auth/users',
                ],
                [
                    'id'        => 9902,
                    'parent_id' => 9900,
                    'order'     => 2,
                    'title'     => '角色',
                    'icon'      => '',
                    'uri'       => 'auth/roles',
                ],
                [
                    'id'        => 9903,
                    'parent_id' => 9900,
                    'order'     => 3,
                    'title'     => '权限',
                    'icon'      => '',
                    'uri'       => 'auth/permissions',
                ],
                [
                    'id'        => 9904,
                    'parent_id' => 9900,
                    'order'     => 4,
                    'title'     => '菜单',
                    'icon'      => '',
                    'uri'       => 'auth/menu',
                ],
            ]
        );
    }
}
