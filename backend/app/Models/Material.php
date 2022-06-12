<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public function MaterialsForCharacters()
    {
        return $this->hasMany(MaterialForCharacter::class);
    }

    public function rarity()
    {
        return $this->belongsTo(Rarity::class, 'rarityId');
    }
}
