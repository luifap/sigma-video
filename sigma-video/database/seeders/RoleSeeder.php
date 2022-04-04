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

        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'web.cursos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'web.cursos.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'web.cursos.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'web.cursos.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'web.videos.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'web.videos.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'web.videos.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'web.videos.destroy'])->syncRoles([$role1, $role2]);


    }
}
