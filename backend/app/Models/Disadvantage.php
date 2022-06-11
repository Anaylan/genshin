<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disadvantage extends Model
{
    use HasFactory;

    public function character()
    {
        $this->belongsTo(Character::class);
    }
}
