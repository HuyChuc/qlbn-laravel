<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function faqRelationships(){
        return $this->hasMany(Faq::class);
    }
    protected $fillable = [
        'name',
        'code',
        'description',
        'parent_id',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/categories/'.$this->getKey());
    }
}
