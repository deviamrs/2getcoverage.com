<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [  
        'name' , 'slug' , 'status' , 'image' , 'front_status' , 'front_details',
    ];

    public function carddetails(){
        return $this->hasMany(CompanyDetailCard::class);
    }

    public function companysections(){
        return $this->hasMany(CompanyContent::class);
    }
}
