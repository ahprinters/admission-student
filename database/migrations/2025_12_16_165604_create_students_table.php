<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            // Relation with users table (name_en, picture আসবে সেখান থেকে)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Admission info (basic)
            $table->string('admission_year')->nullable();
            $table->string('student_type')->nullable();
            $table->date('admission_date')->nullable();
            $table->string('class_roll')->nullable();
            $table->string('branch')->nullable();

            // Personal info
            $table->string('name_bn')->nullable();
            $table->string('name_en')->nullable(); // fallback if user table না থাকে
            $table->string('name_ar')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('age_years')->nullable();
            $table->integer('age_months')->nullable();
            $table->integer('age_days')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_group')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
