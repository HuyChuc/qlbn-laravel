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
        $this->addMediaCollection('cover')
            ->accepts('image/*')
            ->maxNumberOfFiles(1);
        ;
    }

    public function getMediaUrl(){
        $mediaItems = $this->getMedia('cover');
        $publicUrl1 = $mediaItems[0]->getUrl();
        $url = str_replace('localhost', 'localhost:8000', $publicUrl1);
        return $url;
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
