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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('supervisor_id')->constrained('supervisors', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('entitie_id')->constrained('entities', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('course_id')->constrained('courses', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('place');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status')->default('Pedente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
