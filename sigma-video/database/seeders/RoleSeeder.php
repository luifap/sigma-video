<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'General']);

        Permission::create(['name' => 'home']);

        Permission::create(['name' => 'web.cursos.index']);
        Permission::create(['name' => 'web.cursos.create']);
        Permission::create(['name' => 'web.cursos.edit']);
        Permission::create(['name' => 'web.cursos.destroy']);

        Permission::create(['name' => 'web.videos.index']);
        Permission::create(['name' => 'web.videos.create']);
        Permission::create(['name' => 'web.videos.edit']);
        Permission::create(['name' => 'web.videos.destroy']);
    }
}
