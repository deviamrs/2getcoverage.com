<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipContent extends Model
{
    use HasFactory;


    protected $fillable = [
        
        'insurance_tip_id',
        'tip_content',
        'status',

    ];

    public function insurancetip(){
        return $this->belongsTo(InsuranceTip::class);
    }
}
