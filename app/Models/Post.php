<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'thumbnail'];

    public function postImages(): BelongsTo
    {
        return $this->belongsTo(PostImage::class, 'id', 'post_id');
    }

    public function getImage()
    {
        return Media::where('id', $this->thumbnail)->first();
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
