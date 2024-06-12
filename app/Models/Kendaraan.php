<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'no_pol';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'no_pol',
        'no_mesin',
        'jenis_mobil',
        'nama_mobil',
        'merk',
        'kapasitas',
        'tarif'
    ];
}
