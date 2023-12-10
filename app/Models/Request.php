<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;

    public function barang() : BelongsTo
    {
        return $this->belongsTo(Barang::class);
    }

    public function guru() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'tu_id',
        'guru_id',
        'barang_id',
        'nama_barang',
        'jumlah_unit',
        'jumlah_tersedia',
        'status',
        'keperluan',
        'catatan',
        'gambar_request'
    ];

    protected $table = 'requests';
}

