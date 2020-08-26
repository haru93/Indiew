<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'game_id',
        'title',
        'body',
        'image',
    ];

    public function game()
    {
        return $this->belongsTo('App\Models\Game');
    }
}
