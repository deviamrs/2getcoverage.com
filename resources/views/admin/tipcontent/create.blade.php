@extends('adminlayout.layout')

@section('admin_content')
 
<div class="card col-md-12 col-lg-8 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($tipContent) ? 'Edit Section '.$tipContent->id : 'Add'}}   Details To 
      <a href="{{ route('insuranceTip.index') }}"> {{ $insuranceTip->tip_name }}</a>  </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($tipContent) ? route('tipContent.update' , [$insuranceTip->id ,$tipContent->id] ) : route('tipContent.store' , $insuranceTip->id )  }}"  method="post" enctype="multipart/form-data">
    @csrf
       @isset($tipContent)
            @method('PUT') 
       @endisset 
        
       <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="">Section Content</label>
              <textarea type="text" class="form-control @error('tip_content') is-invalid @enderror"  placeholder="tip name" name="tip_content" >{{ isset($tipContent) ? $tipContent->tip_content : old('tip_content') }} </textarea>
              @error('tip_content')
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
              @isset($tipContent)
              @if ($tipContent->status == 1)
                  checked
              @endif
              @endisset >Active 
              <span class="mr-2"></span>
              <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
              @isset($tipContent)
              @if ($tipContent->status == 0)
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
       </div>

     
       <div class="d-grid gap-2 mt-2">
      <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($tipContent) ? 'Update' : 'Add'}} tipContent</button>
       </div>
     </form>
   </div>
 </div>

    
@endsection


    
@section('custom_JS')

<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

<script>
  
  CKEDITOR.replace('tip_content', {
      height: 300,
    });

     
</script>

@endsection