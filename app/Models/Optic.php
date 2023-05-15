<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optic extends Model
{
    use HasFactory;

    protected $fillable = [
        'arus_pemayar',
        'arus_pemfokus',
        'tegangan_pemayar',
        'tegangan_pemfokus',
    ];
}
