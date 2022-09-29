<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukHukum extends Model
{
    use HasFactory;
    protected $table = 'produkhukum';
    protected $fillable = [
        'judul', 'tanggal_arsip', 'Publisher', 'file_produk_hukum'
    ];

}
