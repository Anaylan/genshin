<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function artifacts()
    {
        return $this->hasMany(Artifact::class);
    }

    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
