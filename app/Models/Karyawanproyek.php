<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawanproyek extends Model
{
    use HasFactory;
    protected $table = 'karyawanproyek';
    protected $fillable = [
        'nama_proyek', 
        'penanggung_jawab', 
        'tenggat_waktu',
        'keterangan'
    ];
    public $timestamps = false;
}
