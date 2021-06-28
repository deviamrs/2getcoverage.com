<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsureCategory extends Model
{
    use HasFactory;


    protected $fillable = [
        
        'category_name',
        'category_sub_head',
        'slug',
        'status',
        'front_status',

    ];
   

    
    public function insurancetypes()
    {
        return $this->hasMany(InsuranceType::class);
    }

}
