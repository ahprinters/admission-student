<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * Fillable fields for mass assignment
     */
    protected $fillable = [
        'user_id',
        'admission_year',
        'student_type',
        'admission_date',
        'class_roll',
        'branch',
        'name_bn',
        'name_en',
        'name_ar',
        'date_of_birth',
        'age_years',
        'age_months',
        'age_days',
        'gender',
        'religion',
        'blood_group',
        'class_id',
        'section_id',
    ];

    /**
     * Relations
     */

    // একজন Student একটি User এর সাথে যুক্ত থাকবে
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // একজন Student একটি Class এর সাথে যুক্ত থাকবে
    public function academicClass()
{
    return $this->belongsTo(AcademicClass::class, 'academic_class_id');
}

    // একজন Student একটি Section এর সাথে যুক্ত থাকবে
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // একজন Student একটি Guardian এর সাথে যুক্ত থাকতে পারে
    public function guardian()
    {
        return $this->belongsTo(Guardian::class, 'guardian_id');
    }
}
