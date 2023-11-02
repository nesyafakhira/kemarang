<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    public function request(): BelongsTo
    {
        return $this->belongsTo(Request::class);
    }

    protected $fillable = [
        'nama_barang',
        'jumlah_unit',
        'satuan',
        'harga_satuan',
        'total_harga_tanpa_ppn',
        'ppn',
        'total_harga_ppn',
    ];
}
