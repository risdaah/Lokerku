<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    protected $table = 'lokers';
    protected $primaryKey = 'idloker';
    protected $fillable = [
        'idloker',
        'nomer_loker',
        'waktu_mulai',
        'waktu_selesai',
        'status',
    ];
    public $timestamps = false;
}