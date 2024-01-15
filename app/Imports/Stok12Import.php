<?php

namespace App\Imports;

use App\Models\Barang;
use App\Models\Stok;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class Stok12Import implements ToCollection
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

                // $data['user_id'] = ;
                $data['nama_barang'] = $nama_barang;
                $data['jumlah_unit'] = $row[9];
                $data['satuan'] = $row[10];
                $data['harga_satuan'] = $row[11];
                $data['total_harga_tanpa_ppn'] = $row[12];
                $data['ppn'] = $row[13];
                $data['total_harga_ppn'] = $row[14];

                Barang::create($data);
            }

            $index++;
        }
    }
}
