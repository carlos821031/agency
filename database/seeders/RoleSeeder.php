<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Administrator']);
        $coord = Role::create(['name' => 'Coordinador']);
        $sales = Role::create(['name' => 'Sales']);
        $manag = Role::create(['name' => 'Manager']);
        $assis = Role::create(['name' => 'Assistance']);

        Permission::create(['name' => 'administration.index'])->syncRoles([$admin, $coord, $sales, $manag, $assis]);
        Permission::create(['name' => 'administration.user'])->syncRoles([$admin, $sales, $manag,]);
        Permission::create(['name' => 'administration.users.index'])->syncRoles([$admin, $sales, $manag,]);
        Permission::create(['name' => 'administration.users.store'])->syncRoles([$admin, $sales, $manag,]);
        Permission::create(['name' => 'administration.users.create'])->syncRoles([$admin, $sales, $manag,]);
        Permission::create(['name' => 'administration.users.show'])->syncRoles([$admin, $sales, $manag,]);
        Permission::create(['name' => 'administration.users.update'])->syncRoles([$admin, $sales, $manag,]);
        Permission::create(['name' => 'administration.users.destroy'])->syncRoles([$admin, $sales, $manag,]);
        Permission::create(['name' => 'administration.users.edit'])->syncRoles([$admin, $sales, $manag,]);

        Permission::create(['name' => 'administration.assistances.index'])->syncRoles([$admin, $coord, $sales, $manag, $assis]);
        Permission::create(['name' => 'administration.assistances.import'])->syncRoles([$admin, $coord, $manag]);
        Permission::create(['name' => 'administration.assistances.store'])->syncRoles([$admin, $coord, $manag]);
        Permission::create(['name' => 'administration.assistances.export'])->syncRoles([$admin, $coord, $sales, $manag, $assis]);
        Permission::create(['name' => 'administration.assistances.show'])->syncRoles([$admin, $coord, $sales, $manag, $assis]);
    }
}
