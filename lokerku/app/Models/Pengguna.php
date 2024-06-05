<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $primaryKey = 'idpengguna';
    protected $fillable = [
        'idpengguna',
        'nama',
        'npm',
        'email',
        'telp',
        'password',
        'status',
    ];

    public $timestamps = false;
}