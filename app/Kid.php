<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    public function parent()
    {
        return $this->hasOne('App\Face', 'id', 'f_id');
    }
}
