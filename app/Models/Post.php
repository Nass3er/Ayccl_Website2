<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property int $page_id
 * @property int $category_id
 * @property \Date $date
 * @property bool $active
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $fillable = [
        'category_id',
        'page_id',
        'date',
        'active',
        'order',
    ];


    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'media_able');
    }

    public function mediaOne(): MorphOne
    {
        return $this->morphOne(Media::class, 'media_able');
    }

    public function postDetail() {
        return $this->hasMany(PostDetail::class, 'post_id');
    }
    public function postDetailOne()
    {
        return $this->hasOne(PostDetail::class)->latest(); 
        // latest() returns the one with latest created_at, you can adjust as needed
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function page() {
        return $this->belongsTo(Page::class);
    }
}
