<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    public $table = 'podcast';

    public $fillable = [
        'title'
    ];

}
