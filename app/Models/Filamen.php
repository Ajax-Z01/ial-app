<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filamen extends Model
{
    use HasFactory;

    protected $fillable = [
        'arus_filamen',
        'tegangan_potensio',
        'register',
        'operator',
        'waktu_operasi_detik'
    ];
}
