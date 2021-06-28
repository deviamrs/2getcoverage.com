@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')

<div class="card col-md-6 col-lg-6 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($staticPage) ? 'Edit '. $staticPage->heading : 'Add'}} Page </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($staticPage) ? route('staticPage.update' , $staticPage->id ) : route('staticPage.store') }}"  method="post">
       @csrf
       @isset($staticPage)
            @method('PUT') 
       @endisset 
       <div class="form-group">
         <label for="heading"> Page Name</label>
         <input type="text" class="form-control @error('page_name') is-invalid @enderror" placeholder="Page Name" name="page_name"  value="{{ isset($staticPage) ? $staticPage->page_name : old('page_name')}}"
          @isset($staticPage)
         readonly
         @endisset> 
         @error('page_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>  
       <div class="form-group">
         <label for="heading"> Heading</label>
         <textarea type="text" class="form-control @error('heading') is-invalid @enderror" placeholder="Page Meta Title" name="heading"  value="">{{ isset($staticPage) ? $staticPage->heading : old('heading')}} </textarea>
         @error('heading')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>  
       <div class="form-group">
         <label for="sub_heading">Sub Heading</label>
         <textarea type="text" class="form-control @error('sub_heading') is-invalid @enderror" placeholder="Sub Heading" name="sub_heading"  value="">{{ isset($staticPage) ? $staticPage->sub_heading : old('sub_heading')}} </textarea>
         @error('sub_heading')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>  
    


       <div class="form-group mb-2">
         <label for="answer"> Page Content</label>
         <textarea type="text" class="form-control @error('page_content') is-invalid @enderror" placeholder="Page Meta Title" name="page_content"  value="">{{ isset($staticPage) ? $staticPage->page_content : old('page_content')}} </textarea>
         @error('page_content')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>
      
       <div class="d-grid gap-2 mt-2">
        <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($staticPage) ? 'Update' : 'Add'}} staticPage</button>
         </div>    
    
     </form>
   </div>
 </div>

    
@endsection

@section('custom_JS')
 
<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

<script>


CKEDITOR.replace('page_content', {
      height: 200,
    });
</script>


@endsection