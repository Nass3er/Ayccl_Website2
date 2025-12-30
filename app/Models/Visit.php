<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'company_name',
        'visit_purpose',
        'preferred_date',
        'preferred_time',
        'number_of_visitors',
        'special_requirements',
        'status',
        'ip_address',
        'user_agent'
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'preferred_time' => 'datetime',
    ];

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }
}

