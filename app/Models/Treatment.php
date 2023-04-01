<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Treatment extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'kategori', 'name', 'deskripsi', 'label', 'photo'
    ];

    public function Categories(){
        return $this->belongsTo(Treatment_kategori::class, 'kategori', 'uuid');
    }
}
