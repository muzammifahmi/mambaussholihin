<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'email',
        'nama_lengkap',
        'NIK',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan',
        'no_wa',
        'alamat',
        'tanggal_masuk',

        // data walisantri
        'no_kk',
        'nama_ayah',
        'no_nik_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'no_nik_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'pendapatan_ortu',
        'no_wa_ortu',
    ];
}
