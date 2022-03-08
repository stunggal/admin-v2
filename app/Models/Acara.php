<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $guard = [
        'id',
    ];

    public function news(){
        return $this->belongsTo(News::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
