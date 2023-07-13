<?php

namespace App\Models;

use App\Models\Courses;
use App\Models\Entities;
use App\Models\Student;
use App\Models\Supervisors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internships extends Model
{
    use HasFactory;
    protected $fillable=[
       
        'student_id',
        'course_id',
        'supervisor_id',
        'entitie_id',
        'place',
        'start_date',
        'end_date',
        'status',
    ];

    public function Student()
    {
        return $this->belongsTo(Student::class);
    }
    public function Entities()
    {
        return $this->belongsTo(Entities::class);
    }
    public function Supervisors()
    {
        return $this->belongsTo(Supervisors::class);
    }
    public function Courses()
    {
        return $this->hasMany(Courses::class);
    }
}
