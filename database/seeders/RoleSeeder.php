<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin', 'guard_name' => 'web']);
        $klien = Role::firstOrCreate(['name' => 'Klien', 'guard_name' => 'web']);

        // Assign Super Admin role to the first user in the database if exists
        $firstUser = User::first();
        if ($firstUser) {
            $firstUser->assignRole($superAdmin);
        }
    }
}
