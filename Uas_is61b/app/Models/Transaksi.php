<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaksi extends Model
{
    public function Produks(): HasOne
    {
        return $this->hasOne(Produk::class, 'id', 'produks_id');
    }
    public function Karyawans(): HasOne
    {
        return $this->hasOne(Kategori::class, 'id', 'karyawans_id');
    }
}
