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
            0 => new Stok1Import(),
            1 => new Stok2Import(),
            2 => new Stok3Import(),
            3 => new Stok4Import(),
            4 => new Stok5Import(),
            5 => new Stok6Import(),
            6 => new Stok7Import(),
            7 => new Stok8Import(),
            8 => new Stok9Import(),
            9 => new Stok10Import(),
            10 => new Stok11Import(),
            11 => new Stok12Import()
        ];
    }
}
