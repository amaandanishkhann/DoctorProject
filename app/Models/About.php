<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'email',
        'phone',
        'qualification',
        'work_experience',
        'short_description',
        'long_description',
        'address',
        'Consultation_Timing',
        'image',
    ];
}
