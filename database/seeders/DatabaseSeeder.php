<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'nisn' => '00000000',
            'email' => 'admin@gmail.com',
            'jenis_kelamin' => 'Admin',
            'asal_sekolah' => 'Admin',
            'no_hp' => '0000000000000',
            'no_hp_ayah' => '0000000000000',
            'no_hp_ibu' => '0000000000000',
            'referensi' => 'Admin',
            'password' => bcrypt('admin'),
            'roles' => 'Admin',
        ]);
    }
}
