<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bahan extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['jenis_bahan'];

    protected $searchableFields = ['*'];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}
