<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Produk extends Model
{
    public function Kategoris(): HasOne
    {
        return $this->hasOne(Kategori::class, 'id', 'kategoris_id');
    }
}
