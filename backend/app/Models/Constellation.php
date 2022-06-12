<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constellation extends Model
{
    use HasFactory;

    public function character()
    {
        return $this->belongsTo(Character::class, 'characterId');
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class, 'iconId');
    }
}
