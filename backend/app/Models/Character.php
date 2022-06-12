<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public function rarity()
    {
        return $this->belongsTo(Rarity::class, 'rarityId');
    }

    public function advantages()
    {
        return $this->hasMany(Advantage::class, 'characterId');
    }

    public function disadvantages()
    {
        return $this->hasMany(Disadvantage::class, 'characterId');
    }

    public function w_type()
    {
        return $this->belongsTo(W_type::class, 'wTypeId');
    }

    public function element()
    {
        return $this->belongsTo(Element::class, 'elementId');
    }

    public function stories()
    {
        return $this->hasMany(Story::class, 'characterId');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class, 'characterId');
    }

    public function constellations()
    {
        return $this->hasMany(Constellation::class, 'characterId');
    }

    public function builds()
    {
        return $this->hasMany(Build::class, 'characterId');
    }

    public function stats()
    {
        return $this->hasMany(Stat::class, 'characterId');
    }
}
