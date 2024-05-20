<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    use HasFactory;
    protected $table = 'sewa';
    protected $primaryKey = 'id_sewa';

    protected $fillable = [
        'id_sewa',
        'no_pol',
        'tgl_sewa',
        'tgl_selesai',
        'tlp_tujuan',
        'alamat_tujuan',
        'biaya_sewa',
        'kota',
        'id_penyewa',
        'jlh_penumpang',
        'id_kwitansi',
    ];
}
