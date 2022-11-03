<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

}
