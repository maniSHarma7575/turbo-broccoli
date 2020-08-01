<?php

namespace App;

use App\User;
use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['title','excerpt','body'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
