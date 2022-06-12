<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialForCharacter extends Model
{
    use HasFactory;

    public function material()
    {
        return $this->belongsTo(Material::class, 'materialId');
    }

    public function stat()
    {
        return $this->belongsTo(Stat::class, 'statId');
    }
}
