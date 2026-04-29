<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutCompanySection extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'title_en',
        'content',
        'content_en',
        'order',
        'active',
    ];
}
