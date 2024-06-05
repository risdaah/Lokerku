<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorySewaLoker extends Model
{
    protected $table = 'historysewalokers';
    protected $primaryKey = 'idhistory';
    protected $fillable = [
        'idhistory',
        'idpengguna',
        'nomor_loker',
        'nama_pengguna',
        'npm',
        'email',
        'waktu_mulai',
        'waktu_selesai',
        'status',
    ];
}