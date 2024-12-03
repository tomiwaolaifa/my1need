<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $loginPermission = Permission::create(['name' => 'login']);
        $dashboardPermission = Permission::create(['name' => 'dashboard']);

        $adminRole->givePermissionTo($loginPermission, $dashboardPermission);
        $userRole->givePermissionTo($loginPermission);

        // Create admin user
        $admin = \App\Models\User::create([
            'name' => 'My1need Admin',
            'email' => 'superadmin@my1need.com',
            'password' => Hash::make('123456789'),
        ]);

        $admin->assignRole('admin');
    }
}
