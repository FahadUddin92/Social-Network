<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friendships extends Model
{
    //
    protected $fillable=['reqester','user_requested','stats'];
}
