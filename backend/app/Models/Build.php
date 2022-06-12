<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    use HasFactory;

    public function character()
    {
        return $this->belongsTo(Character::class, 'characterId');
    }

    public function artifacts()
    {
        return $this->hasMany(Artifact_build::class, 'buildId');
    }

    public function weapons()
    {
        return $this->hasMany(Weapon_build::class, 'buildId');
    }

    public function priorities()
    {
        return $this->hasMany(Priority::class, 'buildId');
    }
}
