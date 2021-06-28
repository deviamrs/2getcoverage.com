

@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')


<div class="card col-md-6 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($faqCategory) ? 'Edit' : 'Add'}} faqCategory </h6>
   </div>
   <div class="card-body">
   <form action="{{ isset($faqCategory) ? route('faqCategory.update' , $faqCategory->id) : route('faqCategory.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      @isset($faqCategory)
         @method('PUT')
      @endisset     
      <div class="row">
         <div class="col-md-12">
            <div class="form-group mb-2">
               <label for="faqCategory Main Heading"> Faq Category Name </label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Faq Category Name" name="name"  value="{{ isset($faqCategory) ? $faqCategory->name : old('name') }}"> 
               @error('name')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
               @enderror
             </div> 
             <div class="from-group mb-2">
               <label for="" class="d-block">Faq Category Status</label>
               <input type="radio" name="status" value="1" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"

               @isset($faqCategory)
               @if ($faqCategory->status == 1)
                   checked
               @endif
               @endisset >Active 
               <span class="mr-2"></span>
               <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
               @isset($faqCategory)
               @if ($faqCategory->status == 0)
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
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
   </form>
   </div>
</div>
@endsection











              

              <!-- Form Basic -->
        

         
             
           