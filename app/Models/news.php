<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\news;

class News extends Model
{
    use HasFactory;
    protected $fillable=['fname','description','file'];
}
