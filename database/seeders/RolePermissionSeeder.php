<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Admin
            "tambah_user",
            "edit_user",
            "hapus_user",
            "lihat_user",

            // Staff
            "proses_request",

            // Guru
            "request_barang",

            // Kepsek
            "lihat_laporan",
        ];
        
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        
        $roles = [
            'admin',
            'staff',
            'guru',
            'kepsek',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
        
        $role_admins = [
            'tambah_user',
            'edit_user',
            'hapus_user',
            'lihat_user',
        ];
        
        foreach ($role_admins as $role_admin) {
            $roleAdmin = Role::findByName('admin');
            $roleAdmin->givePermissionTo($role_admin);
        }

        $roleStaff = Role::findByName('staff');
        $roleStaff->givePermissionTo('proses_request');

        $roleGuru = Role::findByName('guru');
        $roleGuru->givePermissionTo('request_barang');

        $roleKepsek = Role::findByName('kepsek');
        $roleKepsek->givePermissionTo('lihat_laporan');

    }
}
