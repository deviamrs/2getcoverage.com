<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'insure_category_id',
       'name',
       'slug',
       'sub_heading',
       'status', 
       'insurance_content',

    ];
}
