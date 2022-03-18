<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'executing',
        'time',
        'organizer',
        'status_id',
        'responsible_id',
        'provedby_id',
        'staff_id',
        'news_id',
        'comitte_id',
        'participant_id',
        'place',
        'about',
    ];

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
