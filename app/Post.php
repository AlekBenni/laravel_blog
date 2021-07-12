<?php

namespace App;

use Carbon\Carbon;
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

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }

    public function scopeLike($query, $search)
    {
        return $query->where('title', 'LIKE', "%{$search}%");
    }

}


