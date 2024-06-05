<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SewaLoker extends Model
{
    protected $table = 'sewalokers';
    protected $primaryKey = 'idsewa';
    protected $fillable = [
        'idsewa',
        'idpengguna',
        'idloker',
        'nama_pengguna',
        'npm',
        'nomer_loker',
        'waktu_mulai',
        'waktu_selesai',
        'status',
    ];
    public $timestamps = false;
}