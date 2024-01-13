<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleSheetsImport implements WithMultipleSheets
{
    /**
     * @param Collection $collection
     */
    public function sheets(): array
    {
        return [
            'STOK (1)' => new Stok1Import(),
            'STOK (2)' => new Stok2Import(),
            'STOK (3)' => new Stok3Import(),
            'STOK (4)' => new Stok4Import(),
            'STOK (5)' => new Stok5Import(),
            'STOK (6)' => new Stok6Import(),
            'STOK (7)' => new Stok7Import(),
            'STOK (8)' => new Stok8Import(),
            'STOK (9)' => new Stok9Import(),
            'STOK (10)' => new Stok10Import(),
            'STOK (11)' => new Stok11Import(),
            'STOK (12)' => new Stok12Import()
        ];
    }
}
