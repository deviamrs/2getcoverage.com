<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceTip extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'tip_name',
        'image',
        'tip_sub_head',
        'slug',
        'status',
        'front_status',

    ];

    public function tipsections(){
    
        return $this->hasMany(TipContent::class);
    }
}
