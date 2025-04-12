<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'code', 'question', 'options', 'correct_answer',
        'default_marks', 'default_time', 'skill_id', 'topic_id',
        'difficulty_level_id', 'preferences', 'has_attachment',
        'attachment_type', 'comprehension_passage_id', 'attachment_options',
        'solution', 'solution_video', 'hint', 'avg_time_taken',
        'total_attempts', 'is_active', 'subject_id', 'lession_id'
    ];

    protected $casts = [
        'options' => 'array',
        'preferences' => 'array',
        'attachment_options' => 'array',
        'solution_video' => 'array',
    ];
}
