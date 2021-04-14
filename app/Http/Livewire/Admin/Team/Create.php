<?php

namespace App\Http\Livewire\Admin\Team;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{  
     
    use WithFileUploads;

    public $name;
    public $image;
    public $designation;
    public $description;

  
    protected $rules = [
       
        'name' => 'required|min:6|max:25',
        'designation' => 'required|min:6|max:25',
        'image' => 'required|mimes:jpg,png,webp|max:250',
        

    ];

    public function save(){
            
         $this->validate(); 
         
         $data['name'] = $this->name;
         $data['designation'] = $this->designation;


         $image_name = time().$this->image->getClientOriginalName();
    
         $image_path = Storage::putFileAs('backend/teams', $this->image , $image_name); 

         
         $data['designation'] = $image_path;


         dd($this->description);



    }


    public function render()
    {
        return view('livewire.admin.team.create');
    }
}
