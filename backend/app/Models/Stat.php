<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    public function character()
    {
        return $this->belongsTo(Character::class, 'characterId');
    }

    public function MaterialsForCharacters()
    {
        return $this->hasMany(MaterialForCharacter::class, 'statId');
    }
}
