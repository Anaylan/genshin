<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    use HasFactory;

    public function build()
    {
        return $this->belongsTo(Build::class);
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class, 'iconId');
    }
}
