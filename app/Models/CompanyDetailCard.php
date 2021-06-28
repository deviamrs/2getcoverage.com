<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetailCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'heading',
        'card_content',
        'status',
        'card_width'
    ];
}
