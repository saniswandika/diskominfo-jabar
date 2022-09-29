<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mohon extends Model
{
    use HasFactory;
    protected $table = 'mohons';
   
    protected $fillable = [
        'nama', 'email', 'No_Ktp', 'kontak','alamat', 'tujuan', 'permintaan_informasi', 'kontak' , 'image_ktp','image_ttd'
    ];
}
