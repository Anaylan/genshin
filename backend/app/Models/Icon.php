<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function constellations()
    {
        return $this->hasMany(Constellation::class);
    }
}
