<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaType extends Model
{
    /** @use HasFactory<\Database\Factories\MediaTypeFactory> */
    use HasFactory;

    public function setNameEnAttribute(?string $value): void
    {
        // If the provided value for 'title_en' is null or empty, use the 'title' value.
        $this->attributes['name_en'] = $value ?? $this->attributes['name'];
    }
    public function media()
    {
        return $this->hasMany(Media::class);
    }

}
