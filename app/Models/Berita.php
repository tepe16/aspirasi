<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    public $table = "berita";

    public $timestamps = false;
    protected $primaryKey = 'id_berita';
    protected  $fillable = [
        'nama_berita','tgl_berita','ket_berita','foto'

    ];
}
