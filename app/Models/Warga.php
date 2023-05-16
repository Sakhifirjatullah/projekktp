<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';
    protected $fillable = [
    'NIK', 
    'Nama',
     'TTL', 
     'JK',
      'Gol_Darah',
       'Alamat', 
    'Rt/Rw', 
    'Kel/Desa',
     'Kecamatan',
      'Agama', 
    'Status_Perkawinan',
     'Pekerjaan',
      'Kewarganegaraan',
];
}
