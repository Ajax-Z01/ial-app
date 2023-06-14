<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'date', 'time', 'admin_id', 'description', 'location', 'link'];

    public function admin()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'notifiable');
    }
}
