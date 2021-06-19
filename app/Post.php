<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'description', 'content', 'category_id', 'thumbnail'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sluggable()
    {
        return [
            'slag' => [
                'source' => 'title'
            ]
        ];
    }

    public function getImage()
    {
        if(!$this->thumbnail){
            return asset("no-image.jpg");
        }
        return asset("uploads/$this->thumbnail");
    }

}


