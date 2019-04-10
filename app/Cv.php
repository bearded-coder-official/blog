<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
