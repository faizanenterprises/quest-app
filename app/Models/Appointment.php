<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender',
        'service',
        'name',
        'phone',
        'date',
        'time',
    ];

    const GENDER_CHOICES = [
        'Male' => 'Male',
        'Female' => 'Female',
    ];

    const SERVICE_CHOICES = [
        'Tourist Visa Processing' => 'Tourist Visa Processing',
        'Canadian Work Permits' => 'Canadian Work Permits',
        'Immigrate to Canada' => 'Immigrate to Canada',
        'Business Immigration' => 'Business Immigration',
        'Student Visa Processing' => 'Student Visa Processing',
        'Family Sponsorship' => 'Family Sponsorship',
    ];
}
