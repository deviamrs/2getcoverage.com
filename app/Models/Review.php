<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
         
        'name',
        'location',
        'content',
        'status',
        'front_status',
        'rating_score',
        'full_stars',
        'half_stars',
        'empty_stars',


    ];
}
