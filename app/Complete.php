<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Complete extends Model
{
    //
    public function mission():HasOne
    {
        return $this->hasOne('App\Mission');
    }
}
