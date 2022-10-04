<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLearningOutcome extends Model
{
    use HasFactory;

    public $table = 'course_learning_outcome';

    public function lessonLearningOutcomes()
    {
        return $this->hasMany(LessonLearningOutcome::class, 'clo_id');
    }
}
