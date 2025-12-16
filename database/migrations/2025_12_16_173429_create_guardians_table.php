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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();

            // Relation with student (একজন গার্ডিয়ান একাধিক স্টুডেন্টের সাথে যুক্ত হতে পারে)
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

            // Father info
            $table->string('father_name_en')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('father_profession')->nullable();

            // Mother info
            $table->string('mother_name_en')->nullable();
            $table->string('mother_mobile')->nullable();

            // Guardian info
            $table->string('guardian_name')->nullable();
            $table->string('relationship')->nullable(); // father/mother/uncle etc.
            $table->string('guardian_mobile')->nullable();
            $table->string('whatsapp_number')->nullable();

            // Family info
            $table->decimal('annual_income', 12, 2)->nullable();
            $table->string('land_area')->nullable();
            $table->integer('family_members')->nullable();
            $table->integer('child_count')->default(1); // in this institute

            // Address info
            $table->json('permanent_address')->nullable();
            $table->json('current_address')->nullable();
            $table->string('custom_address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
