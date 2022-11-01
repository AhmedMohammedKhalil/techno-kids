<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $guard = 'quizzes';

    protected $fillable = [
        'title', 'subtiltle','description','points','question_point','type','topic_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    public function kids()
    {
        return $this->belongsToMany(Kid::class,'test')->withTimestamps();
    }

}