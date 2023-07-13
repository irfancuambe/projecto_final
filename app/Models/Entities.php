<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    use HasFactory;
    protected $fillable=[

        'name',
         'operation_area',
         'contact',
         'email'

    ];
}
