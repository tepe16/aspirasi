<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $table = "komentar_aspirasi";
    public $timestamps = false;
    protected $primaryKey = 'id_komentar_aspirasi';
    protected  $fillable = [
        'id_berita','nama_mahasiswa','nim','tgl_aspirasi','ket_aspirasi'

    ];
}
