<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang'           => 'Pulpen', 
            'jumlah_unit'           => '100',
            'satuan'                => 'Lusin',
            'harga_satuan'          => '12000',
            'total_harga_tanpa_ppn' => '1',
            'ppn'                   => '1',
            'total_harga_ppn'       => '1'
        ]);
        Barang::create([
            'nama_barang'           => 'Pensil', 
            'jumlah_unit'           => '100',
            'satuan'                => 'Lusin',
            'harga_satuan'          => '8000',
            'total_harga_tanpa_ppn' => '1',
            'ppn'                   => '1',
            'total_harga_ppn'       => '1'
        ]);
        Barang::create([
            'nama_barang'           => 'HVS', 
            'jumlah_unit'           => '100',
            'satuan'                => 'Rim',
            'harga_satuan'          => '20000',
            'total_harga_tanpa_ppn' => '1',
            'ppn'                   => '1',
            'total_harga_ppn'       => '1'
        ]);
    }
}
