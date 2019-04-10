<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function achievements()
    {
        return $this->hasMany(Achievements::class);
    }
}
