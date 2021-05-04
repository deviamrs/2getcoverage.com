

@section('title' , \Request::route()->getName() )
    



@extends('adminlayout.layout')

@section('admin_content')


<div class="card col-md-6 col-lg-4 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($category) ? 'Edit' : 'Add'}} Category </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($category) ? route('category.update' , $category->id ) : route('category.store')  }}"  method="post">
    @csrf
       @isset($category)
            @method('PUT') 
       @endisset  
    
       <div class="form-group">
         <label for="exampleInputPassword1">Name</label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputPassword1" placeholder="category name" name="name"  value="{{ isset($category) ? $category->name : old('name') }}"> 
         @error('name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>
       
        

       <div class="d-grid gap-2 mt-2">
        <button type="submit" class="btn btn-primary  text-capitalize">{{ isset($category) ? 'Update' : 'Add'}} Category</button>
      
      </div>
    
     </form>
   </div>
 </div>
@endsection








              

              <!-- Form Basic -->
        

         
             
           