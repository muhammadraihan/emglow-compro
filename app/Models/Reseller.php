<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Reseller extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'wilayah_reseller', 'deskripsi', 'telephone', 'photo'
    ];
}
