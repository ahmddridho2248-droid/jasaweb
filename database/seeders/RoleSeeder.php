<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role Admin dan Client
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $clientRole = Role::firstOrCreate(['name' => 'Client']);

        // User ID 1 (Pawas) sebagai Admin
        $adminUser = User::find(1);
        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }

        // Sisa user sebagai Client
        $clients = User::where('id', '>', 1)->get();
        foreach ($clients as $client) {
            $client->assignRole($clientRole);
        }
    }
}
