<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'message',
    ];

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }
}
