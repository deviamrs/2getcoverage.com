@extends('adminlayout.layout')

@section('admin_content')
 
<div class="card col-md-12 col-lg-8 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($review) ? 'Edit' : 'Add'}} review </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($review) ? route('review.update' , $review->id ) : route('review.store')  }}"  method="post">
    @csrf
       @isset($review)
            @method('PUT') 
       @endisset 
        
       <div class="row">
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="" placeholder="reviewer name" name="name"  value="{{ isset($review) ? $review->name : old('name') }}"> 
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong> 
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="">Location</label>
              <input type="text" class="form-control @error('location') is-invalid @enderror" id="" placeholder="Location" name="location"  value="{{ isset($review) ? $review->location : old('location') }}"> 
              @error('location')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong> 
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="from-group">
              <label for="" class="d-block">Status</label>
              <input type="radio" name="status" value="1" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
              @isset($review)
              @if ($review->status == 1)
                  checked
              @endif
              @endisset >Active 
              <span class="mr-2"></span>
              <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
              @isset($review)
              @if ($review->status == 0)
                  checked
              @endif
              @endisset
               >Not Active
              @error('status') <br>
              <span class="text-danger" role="alert">
                  <small>{{ $message }}</small>
              </span>
              @enderror
             </div>
           </div>
           <div class="col-md-6 mb-2">
            <div class="from-group">
              <label for="" class="d-block">Front Status</label>
              <input type="radio" name="front_status" value="1" class="mr-2" class="custom-control-input @error('front_status') is-invalid @enderror"
              @isset($review)
              @if ($review->front_status == 1)
                  checked
              @endif
              @endisset >Active 
              <span class="mr-2"></span>
              <input type="radio" name="front_status" value="0" class="mr-2" class="custom-control-input @error('front_status') is-invalid @enderror"
              @isset($review)
              @if ($review->front_status == 0)
                  checked
              @endif
              @endisset
               >Not Active
              @error('front_status') <br>
              <span class="text-danger" role="alert">
                  <small>{{ $message }}</small>
              </span>
              @enderror
             </div>
           </div>
           <div class="col-md-6 border p-3">
             <div class="form-row">
                <label for="set-rating">Set Rating (From 1 - 5)</label>
                <input type="range" class="form-range" name="rating_score" id="setrating-bar" min="1" max="5" step="1" value="{{ isset($review) ? $review->rating_score : old('rating_score') }}">
                <input type="text" id="rating-data" readonly class="form-control" style="max-width: 50px">
             </div>
           </div>
       </div>

      
       
       <div class="form-group">
         <label for="">Content</label>
         <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="" placeholder="review content ..." name="content"  rows="10">{{ isset($review) ? $review->content : old('content') }}</textarea> 
         @error('content')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong> 
         </span>
         @enderror
       </div>

       <div class="row">
       
        
       </div>
     
       <div class="d-grid gap-2 mt-2">
      <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($review) ? 'Update' : 'Add'}} review</button>
       </div>
     </form>
   </div>
 </div>

    
@endsection


@section('custom_JS')
    
  <script>

      const inputRange = document.querySelector('#setrating-bar');
      const inputValueBox = document.querySelector('#rating-data');
        
      const setRatingValue = () => {   inputValueBox.value = inputRange.value;     } 
      
      setRatingValue();
      
      inputRange.addEventListener('change' , setRatingValue);

      
        
              
          


  </script>

@endsection