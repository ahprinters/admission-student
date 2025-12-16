<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    /**
     * Fillable fields for mass assignment
     */
    protected $fillable = [
        'student_id',
        'father_name_en',
        'father_mobile',
        'father_profession',
        'mother_name_en',
        'mother_mobile',
        'guardian_name',
        'relationship',
        'guardian_mobile',
        'whatsapp_number',
        'annual_income',
        'land_area',
        'family_members',
        'child_count',
        'permanent_address',
        'current_address',
        'custom_address',
    ];

    /**
     * Relations
     */

    // প্রতিটি Guardian একটি Student এর সাথে যুক্ত থাকবে
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
