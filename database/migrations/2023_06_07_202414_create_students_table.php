<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
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
            $table->foreignId('course_id')->constrained('courses', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('access_level')->constrained('accesslevels', 'id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('cod_student')->unique();
            $table->string('name');
            $table->Integer('contact')->unique();
            $table->string('email')->unique();
            $table->string('password');
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
