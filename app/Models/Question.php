<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guard = 'questions';

    protected $fillable = [
        'question', 'answer','image_url','quiz_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
