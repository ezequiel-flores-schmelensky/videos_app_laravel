<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    // Relación Many To One
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
