<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    use HasFactory;

    protected $fillable = [
       
            'page_name' , 
            'heading' ,
            'sub_heading',
            'page_content' 


    ];
}
