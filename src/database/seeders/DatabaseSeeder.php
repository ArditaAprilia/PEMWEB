<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\SiswaSeeder;
use Spatie\Permission\Models\Role; // ⬅️ Tambahkan ini

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder lainnya
        $this->call([
            SiswaSeeder::class,
        ]);

        // Buat role super_admin kalau belum ada
        Role::firstOrCreate(['name' => 'super_admin']);

        // Buat user admin
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        // Beri role super_admin
        $user->assignRole('super_admin');
    }
}
