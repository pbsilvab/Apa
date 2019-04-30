<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'from',
        'to',
        'message',
        'read'
    ];

    public function fromContact(){
        return $this->hasOne(User::class, 'id', 'from');
    }
}
