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
     */
    public function run(): void
    {
    $perms = [
        'products.view', 'products.create', 'products.edit', 'products.delete',
        'categories.view','categories.create','categories.edit','categories.delete',
        'users.view','users.create','users.edit','users.delete',
        'roles.view','roles.create','roles.edit','roles.delete',
    ];
    foreach ($perms as $permission) { Permission::firstOrCreate(['name'=>$permission, 'guard_name'=>'web']); }

    $admin=Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
    $staff=Role::firstOrCreate(['name' => 'staff', 'guard_name' => 'web']);

    $admin->syncPermissions(Permission::all());

    $staff->syncPermissions([
        'products.view','categories.view','users.view','roles.view',
    ]);
    }
}
