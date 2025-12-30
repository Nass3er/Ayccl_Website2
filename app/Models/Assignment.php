<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Assignment extends model
{
    //use Translatable;
    use HasFactory;
    //public $translatedAttributes = ['name'];
    //protected $guarded=[];
    //protected $primaryKey = ['user_id', 'teacher_id', 'attendance_date'];

    // Indicate that the primary key is not auto-incrementing
    //public $incrementing = false;

    // Define the fillable fields

    /**
     * Get the Doctor's image.
     */

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function college()
    {
        return $this->belongsTo(College::class);
    }
    public function student_assingment()
    {
        return $this->hasMany(Student_assignment::class);
    }

}
