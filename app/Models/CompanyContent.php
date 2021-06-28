<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyContent extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'company_id',
        'company_content',
        'status',

    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
