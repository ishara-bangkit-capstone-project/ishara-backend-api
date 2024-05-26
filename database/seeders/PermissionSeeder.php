<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles
        $roles = [
            'admin',
            'user',
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => 'api',
            ]);
        }

        $admin = Role::findByName('admin');
        $user = Role::findByName('user');

        $admin->users()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin@123'),
        ]);

        $user->users()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('User@123'),
        ]);
    }
}
