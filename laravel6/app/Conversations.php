<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversations extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }
}
