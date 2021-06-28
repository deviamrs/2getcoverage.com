@extends('adminlayout.layout')

@section('admin_content')
 
<div class="card col-md-12 col-lg-8 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary"><a href="javascript:void(0)" onclick="window.history.back(1)">Back</a> {{ isset($insuranceTip) ? 'Edit '.$insuranceTip->tip_name : 'Add'}} Insurance tip </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($insuranceTip) ? route('insuranceTip.update' , $insuranceTip->id ) : route('insuranceTip.store')  }}"  method="post" enctype="multipart/form-data">
    @csrf
       @isset($insuranceTip)
            @method('PUT') 
       @endisset 
       <div class="row">
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="">Tip Name</label>
              <input type="text" class="form-control @error('tip_name') is-invalid @enderror" id="" placeholder="tip name" name="tip_name"  value="{{ isset($insuranceTip) ? $insuranceTip->tip_name : old('tip_name') }}"> 
              @error('tip_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong> 
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="">Tip sub head</label>
              <input type="text" class="form-control @error('tip_sub_head') is-invalid @enderror" id="" placeholder="tip sub head" name="tip_sub_head"  value="{{ isset($insuranceTip) ? $insuranceTip->tip_sub_head : old('tip_sub_head') }}"> 
              @error('tip_sub_head')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong> 
              </span>
              @enderror
            </div>
          </div>
           
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="" placeholder="Slug" name="slug"  value="{{ isset($insuranceTip) ? $insuranceTip->slug : old('slug') }}"> 
              @error('slug')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong> 
              </span>
              @enderror
            </div>
          </div>

          <div class="col-md-6 mb-2">
            @isset($insuracetip)
            <img src="{{ asset('public/'.$insuracetip->image) }}" alt="" class="mb-2" style="width: 100px">
            @endisset
  
            <div class="form-group mb-2">
              <label for="floatingPassword">Image</label>
              <input type="file" class="form-control"  name="image">
              @error('image')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
            </div>
          </div>

         
          <div class="col-md-6 mb-2">
            <div class="from-group">
              <label for="" class="d-block">Status</label>
              <input type="radio" name="status" value="1" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
              @isset($insuranceTip)
              @if ($insuranceTip->status == 1)
                  checked
              @endif
              @endisset >Active 
              <span class="mr-2"></span>
              <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
              @isset($insuranceTip)
              @if ($insuranceTip->status == 0)
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
              @isset($insuranceTip)
              @if ($insuranceTip->front_status == 1)
                  checked
              @endif
              @endisset >Active 
              <span class="mr-2"></span>
              <input type="radio" name="front_status" value="0" class="mr-2" class="custom-control-input @error('front_status') is-invalid @enderror"
              @isset($insuranceTip)
              @if ($insuranceTip->front_status == 0)
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
          
       </div>

     
       <div class="d-grid gap-2 mt-2">
      <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($insuranceTip) ? 'Update' : 'Add'}} insuranceTip</button>
       </div>
     </form>
   </div>
 </div>

    
@endsection


{{-- @section('custom_JS')
    
  <script>

      const inputRange = document.querySelector('#setrating-bar');
      const inputValueBox = document.querySelector('#rating-data');
        
      const setRatingValue = () => {   inputValueBox.value = inputRange.value;     } 
      
      setRatingValue();
      
      inputRange.addEventListener('change' , setRatingValue);

      
        
              
          


  </script>

@endsection --}}