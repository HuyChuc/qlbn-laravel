<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostsComment extends Model
{
    protected $table = 'posts_comment';

    protected $fillable = [
        'code',
        'create_date',
        'post_id',
        'comment',
        'full_name',

    ];


    protected $dates = [];
    public $timestamps = false;

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/posts-comments/' . $this->getKey());
    }
}
