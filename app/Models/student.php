<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable=['firstname','lastname','email','phone','gender','image'];
    
        public function studentchoices()
        {
            return $this->hasMany(StudentChoice::class,'student_id');
        }   

}
