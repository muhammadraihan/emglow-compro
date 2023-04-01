<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Produk extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'name', 'kategori', 'deskripsi', 'photo'
    ];

    public function Categories(){
        return $this->belongsTo(Produk_kategori::class, 'kategori', 'uuid');
    }
}
