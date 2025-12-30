<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Support\Str;// Added HasFactory trait

/**
 * App\Models\PostDetail
 *
 * @property int $id
 * @property int $post_id
 * @property int $category_id
 * @property string $title
 * @property string $title_en
 * @property string $slug
 * @property string $slug_en
 * @property string $content
 * @property string $content_en
 * @property string $color
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class PostDetail extends Model
{
    use HasFactory; // Make sure to include this trait

    protected $fillable = [
        'post_id',
        'category_id',
        'title',
        'title_en',
        'slug',
        'slug_en',
        'content',
        'content_en',
        'color',
        'order',
    ];

    /**
     * Set the slug_en value. If it's null, use the slug value instead.
     *
     * @param  string|null  $value
     * @return void
     */
    public function setSlugAttribute(?string $value): void
    {
        // If the provided value for 'slug_en' is null or empty, use the 'slug' value.
        $value = Str::trim($value);
        $value = Str::replace(' ', '-', $value);
        $this->attributes['slug'] = $value;
    }
    public function setSlugEnAttribute(?string $value): void
    {
        // If the provided value for 'slug_en' is null or empty, use the 'slug' value.
        $value = Str::trim($value);
        $value = Str::replace(' ', '-', $value);
        $this->attributes['slug_en'] = $value;
    }

    /**
     * Get the post's title based on the current application locale.
     *
     * @return string
     */
    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($this->attributes['title_en'])) {
            return $this->attributes['title_en'];
        }
        return $this->attributes['title'];
    }

    /**
     * Get the post's slug based on the current application locale.
     *
     * @return string
     */
    public function getSlugAttribute()
    {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($this->attributes['slug_en'])) {
            return $this->attributes['slug_en'];
        }
        return $this->attributes['slug'];
    }

    /**
     * Get the post's content based on the current application locale.
     *
     * @return string|null
     */
    public function getContentAttribute()
    {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($this->attributes['content_en'])) {
            return $this->attributes['content_en'];
        }
        return $this->attributes['content'];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function mediaOne(): MorphOne
    {
        return $this->morphOne(Media::class, 'media_able');
    }
}
