<?php

namespace App\Http\Livewire\ZipData;

use Livewire\Component;

class GetZipCode extends Component
{   
   
    public $zip_code;
   


    protected $rules = [
        'zip_code' => 'required|regex:/\b\d{5}\b/',
        
    ];


    public function getZipcCode(){
         
        $this->validate();

        redirect(route('front.getVehicleInfo' , $this->zip_code));


    }
    
    public function render()
    {
        return view('livewire.zip-data.get-zip-code');
    }
}
