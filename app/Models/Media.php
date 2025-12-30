<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Str;

class Media extends Model
{
    /** @use HasFactory<\Database\Factories\MediaFactory> */
    use HasFactory;

    public function setAltEnAttribute(?string $value): void
    {
        // If the provided value for 'alt_en' is null or empty, use the 'alt' value.
        $this->attributes['alt_en'] = $value ?? $this->attributes['alt'];
    }

    public static function getAlt(?string $value): String
    {
        // If the provided value for 'slug_en' is null or empty, use the 'slug' value.
        $value = Str::trim($value);
        $value = Str::replace(' ', '-', $value);
        return $value;
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function media_type()
    {
        return $this->belongsTo(MediaType::class);
    }
    public function media_able(): MorphTo
    {
        return $this->morphTo();
    }
}
