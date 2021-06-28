<div>
    @if (session()->has('success_message'))
        <div class="success-message-box text-dark " >  {{ session('success_message') }} </div>       
    @endif
    <form  class="global-form" wire:submit.prevent="saveForm">
         <div wire:loading> 
            <div class="loader-container" ><div class="loader-item"></div><p class="text-primary">Submitting Form ...</p></div>
         </div> 
        <div class="global-form-box">
            <label class="input-label" for="name">Name</label>
            <input type="text" class="input-bar" id="name"  placeholder="Name" wire:model.defer="name">
            @error('name') <span class="text-red">{{ $message }}</span> @enderror 
        </div>
        <div class="global-form-box">
            <label class="input-label" for="phone">Phone</label>
            <input type="text" class="input-bar" id="phone" placeholder="Phone" wire:model.defer="phone">
            @error('phone') <span class="text-red">{{ $message }}</span> @enderror 
        </div>
        <div class="global-form-box">
            <label class="input-label" for="email">Email</label>
            <input type="email" class="input-bar" id="email" placeholder="Email" wire:model.defer="email">
            @error('email') <span class="text-red">{{ $message }}</span> @enderror 
        </div>
        <div class="global-form-box">
            <label class="input-label tr" for="message">Message</label>
             <textarea  id="message"  rows="5"   placeholder="" class="input-bar msg" wire:model.defer="message"></textarea>
             @error('message')   <span class="text-red">{{ $message }}</span> @enderror 
        </div>
        <div class="global-form-box">
           <button class="btn btn-primary btn-hero-input">Submit</button>
        </div>
     </form>
</div>
