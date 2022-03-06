<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fav extends Model
{
    use SoftDeletes;

    /*
    |---------------------------------------------
    | Relations
    |---------------------------------------------
    */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tweet()
    {
        return $this->belongsTo('App\Models\Tweets');
    }
}
