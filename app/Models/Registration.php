<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'student_id',
        'institution',
        'level',
        'major',
        'grade',
        'category',
        'participation_type',
        'team_name',
        'team_members',
        'project_title',
        'project_description',
        'student_card_path',
        'active_student_path',
        'payment_proof_path',
        'terms_accepted',
        'newsletter_subscribed'
    ];

    protected $casts = [
        'terms_accepted' => 'boolean',
        'newsletter_subscribed' => 'boolean'
    ];
}
