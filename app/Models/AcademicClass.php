<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicClass extends Model
{
    use HasFactory;

    /**
     * Fillable fields for mass assignment
     */
    protected $fillable = [
        'name',
        'level',
    ];

    /**
     * Relations
     */

    // এক ক্লাসের অনেকগুলো সেকশন থাকতে পারে
    public function sections()
    {
        return $this->hasMany(Section::class, 'class_id');
    }

    // এক ক্লাসে অনেক স্টুডেন্ট থাকতে পারে
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}
