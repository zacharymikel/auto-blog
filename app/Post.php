<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title', 'image_name', 'description'
    ];

    protected $hidden = [];
    protected $casts = [];
}
