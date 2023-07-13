<?php

namespace App\Models;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Supervisors as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Supervisors extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable=[
       
        'course_id',
        'access_level',
        'code',
        'name',
        'contact',
        'email',
        'password',
    ];

    public function Courses()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
