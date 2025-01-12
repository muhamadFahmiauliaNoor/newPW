<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
    protected $table = 'ukm';
    protected $fillable = ['nama_ukm', 'nama_ketua', 'angkatan', 'image'];
}
