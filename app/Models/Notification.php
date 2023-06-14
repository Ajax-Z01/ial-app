<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['model_id', 'model_type', 'content'];

    public function model()
    {
        return $this->morphTo();
    }
}
