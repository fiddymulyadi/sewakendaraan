<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    use HasFactory;
    protected $table = 'penyewa';

    protected $fillable = [
        'id_penyewa',
        'nama_penyewa',
        'alamat',
        'no_hp',
    ];
}
