<?php

namespace App\Imports;

use App\Models\Barang;
use App\Models\Stok;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class Stok10Import implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $index = 1;
        foreach ($collection as $row) {
            if ($index > 6) {


                $nama_barang = !empty($row[2]) ? $row[2] : '';

                if (!$nama_barang) {
                    break;
                }

                $rumus1 = $row[9] * $row[11];
                $rumus2 = $rumus1 * 0.11;
                $rumus3 = $rumus1 + $rumus2;

                // dd($rumus3);

                $expressionLanguage = new ExpressionLanguage();

                $hasil1 = $expressionLanguage->evaluate($rumus1); // Hasil dari J7*L7
                $hasil2 = $expressionLanguage->evaluate($rumus2); // Hasil dari M7*11%
                $hasil3 = $expressionLanguage->evaluate($rumus3); // Hasil dari M7+N7

                // $data['user_id'] = ;
                $data['nama_barang'] = $nama_barang;
                $data['jumlah_unit'] = $row[9];
                $data['satuan'] = $row[10];
                $data['harga_satuan'] = $row[11];
                $data['total_harga_tanpa_ppn'] = $hasil1;
                $data['ppn'] = $hasil2;
                $data['total_harga_ppn'] = $hasil3;

                Barang::create($data);
            }

            $index++;
        }
    }
}
