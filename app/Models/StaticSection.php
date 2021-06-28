<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticSection extends Model
{
    use HasFactory;

    protected $fillable = [
    
             'heading' ,
            'sub_heading',
            'section_content',
            'image',

    ];
}
