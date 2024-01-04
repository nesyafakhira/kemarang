<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AddBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $gambarPath = 'gambar/gambar_barang/'.$faker->image('public/gambar/gambar_barang', 400, 300, null, false);

        Barang::create([
            'nama_barang'           => 'Pulpen', 
            'deskripsi'             => 'Pulpen Pilot', 
            'jumlah_unit'           => '100',
            'satuan'                => 'Pcs',
            'harga_satuan'          => '12000',
            'total_harga_tanpa_ppn' => '1',
            'ppn'                   => '1',
            'gambar_barang'         => $gambarPath,
            'total_harga_ppn'       => '1'
        ]);
        Barang::create([
            'nama_barang'           => 'Pensil', 
            'deskripsi'             => 'Pensil 2B', 
            'jumlah_unit'           => '100',
            'satuan'                => 'Pcs',
            'harga_satuan'          => '8000',
            'total_harga_tanpa_ppn' => '1',
            'ppn'                   => '1',
            'gambar_barang'         => $gambarPath,
            'total_harga_ppn'       => '1'
        ]); 
        Barang::create([
            'nama_barang'           => 'HVS', 
            'deskripsi'             => 'HVS A4', 
            'jumlah_unit'           => '100',
            'satuan'                => 'Rim',
            'harga_satuan'          => '20000',
            'total_harga_tanpa_ppn' => '1',
            'ppn'                   => '1',
            'gambar_barang'         => $gambarPath,
            'total_harga_ppn'       => '1'
        ]);
    }
}
