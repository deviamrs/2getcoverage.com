<form wire:submit.prevent="getZipcCode" class="input-with-cta">
    <div class="input-box">
       <span class="input-icon text-primary"><i class="fas fa-map-marker-alt"></i></span>
       <input type="text"  class="input-box-control" placeholder="Zip Code" wire:model.defer="zip_code"> 
       @error('zip_code')
       
        <small style="color: red"> {{  $message }}</small>
           
       @enderror
    </div>
    <button type="submit" class="btn btn-hero-input">Start Comparing</button>
 </form>
