<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $table = 'faq';

    protected $fillable = [
        'title',
        'content',
        'enabled',
        'cat_id',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/faqs/'.$this->getKey());
    }
}
