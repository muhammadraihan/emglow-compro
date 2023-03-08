<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class About extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'visi', 'misi', 'sejarah', 'nama_cv', 'alamat', 'no_tlp', 'photo'
    ];
}
