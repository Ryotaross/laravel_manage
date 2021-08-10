<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    //
    protected $fillable = [
        'date',
        'time',
        'content',
        'equip',
        'impact',
        'thing',
        'other',
    ];
    public function mission():BelongsTo
    {
        return $this->belongsTo('App\Mission');
    }
}

