<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guard = [
        'id',
    ];

    public function role(){
        return $this->hasOne(User::class);
    }

}
