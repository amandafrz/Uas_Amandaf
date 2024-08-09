<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaksi1 extends Model
{
    public function Karyawans(): HasOne
    {
        return $this->hasOne(Karyawan::class, 'id', 'karyawan_id');
    }
    public function Produks(): HasOne
    {
        return $this->hasOne(Kategori::class, 'id', 'produks_id');
    }
}
