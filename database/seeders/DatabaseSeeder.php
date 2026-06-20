<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pastikan tabel users terisi default user
        $user = User::create([
            'name' => 'Nama User',
            'email' => 'admin@jasaweb.com',
            'password' => bcrypt('password'),
            'no_hp' => '081234567890'
        ]);

        // Opsional: Jalankan RoleSeeder jika ada
        if (class_exists(RoleSeeder::class)) {
            $this->call([
                RoleSeeder::class,
            ]);
        }
    }
}
