<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;// Added HasFactory trait


/**
 * App\Models\PostDetail
 *
 * @property int $id
 * @property int $name
 * @property int $name_en
 * @property int $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_en',
        'type',
    ];

    /**
     * Get the category name based on the current application locale.
     *
     * @return string|null
     */
    public function getNameAttribute()
    {
        $locale = app()->getLocale();

        if ($locale === 'en') {
            return $this->attributes['name_en'] ?? $this->attributes['name'];
        }

        return $this->attributes['name'];
    }

    public function PostDetail()
    {
        return $this->hasMany(PostDetail::class);
    }

}
