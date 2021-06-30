<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceLeads extends Model
{
    use HasFactory;

    protected $fillable = [        
        'car_year','vehicle_maker','vehicle_maker_other','vehicle_model','vehicle_trin','park_at_home','has_insurance','current_insurance','insurance_duration','gender','is_married','home_owner','recieve_renter_qoute','at_fault_accident','is_ticketed','dui_convinction','is_members_of_us_army','birthday','first_name','last_name','email','street_address','mobile'
    ];   
}
