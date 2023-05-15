<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vakum extends Model
{
    use HasFactory;

    protected $fillable = [
        'tekanan_vakum_penning_mbar',
        'tekanan_vakum_pirani_mbar',
        'waktu_operasi_detik'
    ];
}
