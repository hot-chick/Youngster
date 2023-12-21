<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'image',
        'description',
        'post_date'
    ];
    public function Post_lo()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
