<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $staff = User::create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $guru = User::create([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $kepsek = User::create([
            'name' => 'kepsek',
            'email' => 'kepsek@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');
        $staff->assignRole('staff');
        $guru->assignRole('guru');
        $kepsek->assignRole('kepsek');
    }
}
