<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'jurusan'
    ];
}
