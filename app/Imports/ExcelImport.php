<?php

namespace App\Imports;

use App\Models\Barang;
use App\Models\Stok;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);

        $index = 1;

        foreach ($collection as $row) {
            if ($index > 2) {
                $nama_barang = !empty($row[0]) ? $row[0] : '';

                if (!$nama_barang) {
                    break;
                }

                $rumus1 = $row[2] * $row[4]; // rumus total_harga_tanpa_ppn
                $rumus2 = $rumus1 * 0.11;    // rumus ppn
                $rumus3 = $rumus1 + $rumus2; // rumus total_harga_ppn

                $expressionLanguage = new ExpressionLanguage();

                $hasil1 = $expressionLanguage->evaluate($rumus1); // Hasil dari J7*L7
                $hasil2 = $expressionLanguage->evaluate($rumus2); // Hasil dari M7*11%
                $hasil3 = $expressionLanguage->evaluate($rumus3); // Hasil dari M7+N7

                $barang = Barang::create([
                    'nama_barang'           => $nama_barang, 
                    'deskripsi'             => $row[1],
                    'jumlah_unit'           => $row[2],
                    'satuan'                => $row[3],
                    'harga_satuan'          => $row[4],
                    'total_harga_tanpa_ppn' => $hasil1,
                    'ppn'                   => $hasil2,
                    'total_harga_ppn'       => $hasil3
                ]);

                Stok::create([
                    'barang_id'     => $barang->id,
                    'nama_stok'     => $nama_barang,
                    'stok_awal'     => $row[2],
                    'stok_keluar'   => 0,
                    'stok_akhir'    => $row[2]
                ]);
            }
            $index++;
        }

    }
}
