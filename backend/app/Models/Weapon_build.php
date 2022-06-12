<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon_build extends Model
{
    use HasFactory;

    public function weapon()
    {
        return $this->belongsTo(Weapon::class, 'weaponId');
    }

    public function build()
    {
        return $this->belongsTo(Build::class);
    }
}
