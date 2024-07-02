<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'judul',
        'kategori_id',
        'bahan_id',
        'deskripsi',
        'harga',
        'gambar',
    ];

    protected $searchableFields = ['*'];

    public function bahan()
    {
        return $this->belongsTo(Bahan::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
