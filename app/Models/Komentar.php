<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    public $table = "balasan_komentar";

    public $timestamps = false;
    protected $primaryKey = 'id_balasan_komentar';
    protected  $fillable = [
        'id_komentar_aspirasi','keterangan_balasan','waktu'

    ];
}
