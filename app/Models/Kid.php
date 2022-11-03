<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kid extends Authenticatable
{
    use HasFactory;
    protected $guard = 'kid';

    protected $fillable = [
        'name', 'email', 'points','gender','age','image_url','level_id','password'
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
