<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    public function skills()
    {
        return $this->belongsToMany(Skill::class,'professional_skill');
    }
}
