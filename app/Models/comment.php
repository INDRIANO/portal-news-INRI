<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['news_id' , 'user_id' , 'content'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies ()
    {
        return $this->hasMany(Replay::class, 'comment_id');
    }
}


