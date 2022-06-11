<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artifact extends Model
{
    use HasFactory;

    public function rarity()
    {
        return $this->belongsTo(Rarity::class, 'rarityId');
    }

    public function recommendations()
    {
        return $this->hasMany(Artifact_build::class, 'artifactId');
    }
}
