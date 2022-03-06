<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tweet extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'content',
    ];

    /*
    |---------------------------------------------
    | Relations
    |---------------------------------------------
    */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
