<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Promo extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'name', 'detail', 'photo', 'tgl_awal', 'tgl_akhir'
    ];
}
