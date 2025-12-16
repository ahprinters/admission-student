<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * Fillable fields for mass assignment
     */
    protected $fillable = [
        'academic_class_id',
        'name',
    ];

    /**
     * Relations
     */

    // প্রতিটি সেকশন একটি AcademicClass এর অন্তর্ভুক্ত
    public function academicClass()
    {
        return $this->belongsTo(AcademicClass::class, 'academic_class_id');
    }

    // প্রতিটি সেকশনে অনেক স্টুডেন্ট থাকতে পারে
    public function students()
    {
        return $this->hasMany(Student::class, 'section_id');
    }
}
