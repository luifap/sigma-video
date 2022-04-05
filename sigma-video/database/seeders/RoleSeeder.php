<?php

namespace Database\Seeders;


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

        Permission::create(['name' => 'curso.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'curso.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'curso.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'curso.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'video.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'video.destroy'])->syncRoles([$role1, $role2]);
    }
}
