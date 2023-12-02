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
            'nip' => '11111111',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $staff = User::create([
            'name' => 'staff',
            'nip' => '123456788',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $guru = User::create([
            'name' => 'guru',
            'nip' => '123456778',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $kepsek = User::create([
            'name' => 'kepsek',
            'nip' => '123456678',
            'email' => 'kepsek@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');
        $staff->assignRole('staff');
        $guru->assignRole('guru');
        $kepsek->assignRole('kepsek');
    }
}
