<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;

class Post extends Model implements HasMedia
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery')
            ->accepts('image/*')
            ->maxNumberOfFiles(1);
        ;
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('detail_hd')
            ->width(1920)
            ->height(1080)
            ->performOnCollections('gallery');
        $this->autoRegisterThumb200();
    }

    protected $fillable = [
        'title',
        'slug',
        'perex',
        'published_at',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/posts/'.$this->getKey());
    }
}
