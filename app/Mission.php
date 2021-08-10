<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Mission extends Model
{
    //
    protected $fillable = [
        'name',
        'memo',
    ];
    public function user():BelongsTo
    {
        return $this->belongsTo('App\User');
    }
    public function event():HasMany
    {
        return $this->hasMany('App\event');
    }

    
}
