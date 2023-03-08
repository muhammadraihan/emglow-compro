<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Dokter extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'name','uuid_cabang', 'deskripsi', 'jadwal', 'photo'
    ];

    public function Cabang(){
        return $this->belongsTo(Cabang::class, 'uuid_cabang', 'uuid');
    }
}
