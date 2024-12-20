<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'submitted_at',
        'full_name',
        'father_or_husband_name',
        'gender',
        'contact_number_1',
        'contact_number_2',
        'residential_address',
        'current_city',
        'email',
        'date_of_birth',
        'qualification',
        'teaching_experience',
        'tuition_duration',
        'minimum_monthly_fee_home',
        'currency',
        'minimum_monthly_fee_online',
        'specialties',
        'home_tuition_type',
        'referral_source',
        'can_teach_professionals',
        'query',
        'additional_comments',
        'google_map_location',
    ];

}
