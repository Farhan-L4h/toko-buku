<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nama_barang',
        'id_kategori',
        'harga',
        'stock',
        'deskripsi',
    ];

    public function kategoris(){
        return $this->belongsTo(kategori::class, 'id');
    }
}
