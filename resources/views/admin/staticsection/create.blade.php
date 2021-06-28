@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')

<div class="card col-md-6 col-lg-6 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($staticSection) ? 'Edit '. $staticSection->heading : 'Add'}} Page </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($staticSection) ? route('staticSection.update' , $staticSection->id ) : route('staticSection.store') }}"  method="post" enctype="multipart/form-data">
       @csrf
       @isset($staticSection)
            @method('PUT') 
       @endisset 
     
       <div class="form-group">
         <label for="heading"> Heading</label>
         <textarea type="text" class="form-control @error('heading') is-invalid @enderror" placeholder="Page Meta Title" name="heading"  value="">{{ isset($staticSection) ? $staticSection->heading : old('heading')}} </textarea>
         @error('heading')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>  
       <div class="form-group">
         <label for="sub_heading">Sub Heading</label>
         <textarea type="text" class="form-control @error('sub_heading') is-invalid @enderror" placeholder="Sub Heading" name="sub_heading"  value="">{{ isset($staticSection) ? $staticSection->sub_heading : old('sub_heading')}} </textarea>
         @error('sub_heading')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div> 
          @isset($staticSection)
          <img src="{{ asset('public/'.$staticSection->image) }}" alt="" class="mb-2" style="width: 100px">
      @endisset

      <div class="form-group mb-2">
        <label for="floatingPassword">Image</label>
        <input type="file" class="form-control"  name="image">
        @error('image')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
      </div> 
    


       <div class="form-group mb-2">
         <label for="answer"> Section Content</label>
         <textarea type="text" class="form-control @error('section_content') is-invalid @enderror" placeholder="Page Meta Title" name="section_content"  value="">{{ isset($staticSection) ? $staticSection->section_content : old('section_content')}} </textarea>
         @error('section_content')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>
      
       <div class="d-grid gap-2 mt-2">
        <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($staticSection) ? 'Update' : 'Add'}} staticSection</button>
         </div>    
    
     </form>
   </div>
 </div>

    
@endsection

@section('custom_JS')
 
<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

<script>


CKEDITOR.replace('section_content', {
      height: 200,
    });
</script>


@endsection