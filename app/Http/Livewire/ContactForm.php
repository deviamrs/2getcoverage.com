<?php

namespace App\Http\Livewire;

use App\Mail\Contact\CompanyEmail;
use App\Mail\Contact\UserEmail;
use App\Models\ContactFormDetail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{   
    public $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?).*$)@";
    
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
 

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => "required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10",
        'message' => 'required|max:255'
    ]; 


    public function saveForm(){
        $this->validate();
      

        $emaiData = [
           
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => preg_replace($this->regex, ' ', $this->message),
             

        ];

        ContactFormDetail::create($emaiData);

       Mail::to($this->email)->send(new UserEmail($emaiData));
       Mail::to('contact@2getcoverage.com')->send(new CompanyEmail($emaiData));    

       $this->reset();
        session()->flash('success_message', 'Form Submitted Successfully');

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
