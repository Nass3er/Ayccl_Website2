<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory;
    public $incrementing = false;
    // protected $hidden = ['name_en'];
    protected $fillable = [
        'id',
        'title',
        'background',
        'content',
        'title_en',
        'content_en'
    ];

    /**
     * Get the page's title based on the current application locale.
     *
     * @return string
     */
    public function getTitleAttribute()
    {
        // Get the current locale from the application
        $locale = app()->getLocale();

        // Use the raw attributes to prevent an infinite loop
        if ($locale === 'en' && !empty($this->attributes['title_en'])) {
            return $this->attributes['title_en'];
        }

        // Return the default Arabic title from the raw attributes
        return $this->attributes['title'];
    }

    /**
     * Get the page's slug based on the current application locale.
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
     * Get the page's content based on the current application locale.
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
    public function media(): MorphOne
    {
        return $this->morphOne(Media::class, 'media_able');
    }
}
