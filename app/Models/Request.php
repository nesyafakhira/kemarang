<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Request extends Model
{
    use HasFactory;

    public function barang() : HasMany
    {
        return $this->hasMany(Barang::class);
    }

    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
