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
        $this->hasMany(Advantage::class);
    }

    public function disadvantages()
    {
        $this->hasMany(Disadvantage::class);
    }

    public function w_type()
    {
        return $this->belongsTo(W_type::class, 'wTypeId');
    }

    public function element()
    {
        return $this->belongsTo(Element::class, 'elementId');
    }
}
