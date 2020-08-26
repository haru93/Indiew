<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image',
    ];

    public function game()
    {
        return $this->belongsTo('App\Models\Game');
    }
}
