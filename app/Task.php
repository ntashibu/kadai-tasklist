<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //一対多の関係を追記　201904080221
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
