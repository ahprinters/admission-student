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
        Schema::table('students', function (Blueprint $table) {
        $table->foreignId('academic_class_id')->nullable()->constrained('academic_classes')->onDelete('set null');
        $table->foreignId('section_id')->nullable()->constrained('sections')->onDelete('set null');
        $table->foreignId('guardian_id')->nullable()->constrained('guardians')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
        $table->dropForeign(['academic_class_id']);
        $table->dropForeign(['section_id']);
        $table->dropForeign(['guardian_id']);
        $table->dropColumn(['academic_class_id', 'section_id', 'guardian_id']);

        });
    }
};
