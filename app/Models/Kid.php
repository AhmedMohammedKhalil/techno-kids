<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    use HasFactory;
    protected $guard = 'kids';

    protected $fillable = [
        'name', 'email', 'points','gender','age','image_url','level_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class,'test')->withTimestamps();
    }
}
