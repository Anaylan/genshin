<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class W_type extends Model
{
    use HasFactory;

    public function characters()
    {
        $this->hasMany(Character::class);
    }
}
