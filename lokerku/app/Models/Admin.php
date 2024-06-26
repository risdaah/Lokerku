<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'idadmin',
        'namaadmin',
        'username',
        'email',
        'telp',
        'password',
        'level',
    ];

    public $timestamps = false;
}