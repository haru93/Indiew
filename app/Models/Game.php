<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'data',
        'image',
        'url',
        'price',
        'category_id',
        'released_date',
    ];

    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
