<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    public function barang() : BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }
    
    protected $table = 'stoks';

    protected $fillable = [
        'barang_id',
        'nama_stok',
        'stok_awal',
        'stok_keluar',
        'stok_akhir'
    ];


}
