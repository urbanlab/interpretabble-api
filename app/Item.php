<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'medias',
        'card_id',
    ];

    protected $casts = [
        'medias' => 'array'
    ];
}
