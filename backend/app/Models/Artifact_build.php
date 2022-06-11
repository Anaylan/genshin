<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artifact_build extends Model
{
    use HasFactory;

    public function artifact()
    {
        return $this->belongsTo(Artifact::class);
    }

    public function build()
    {
        return $this->belongsTo(Build::class);
    }
}
