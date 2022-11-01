<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guard = 'videos';

    protected $fillable = [
        'url','description','topic_id'
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
}
