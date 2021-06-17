<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    use Sluggable;

    protected $fillable = ['title'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function sluggable()
    {
        return [
            'slag' => [
                'source' => 'title'
            ]
        ];
    }
}
