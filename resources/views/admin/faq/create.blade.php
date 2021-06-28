@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')

<div class="card col-md-6 col-lg-6 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($faq) ? 'Edit' : 'Add'}} To {{ $faqCategory->name }} </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($faq) ? route('faq.update' , [$faqCategory->id , $faq->id] ) : route('faq.store' , $faqCategory->id) }}"  method="post">
       @csrf
       @isset($faq)
            @method('PUT') 
       @endisset 
       <div class="form-group">
         <label for="answer"> Faq Question</label>
         <textarea type="text" class="form-control @error('question') is-invalid @enderror" placeholder="Page Meta Title" name="question"  value="">{{ isset($faq) ? $faq->question : old('question ') }} </textarea>
         @error('question')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>  
       <br>
       <div class="from-group">
         <label for="" class="d-block">Faq Status</label>
         <input type="radio" name="status" value="1" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"

         @isset($faq)
         @if ($faq->status == 1)
             checked
         @endif
         @endisset >Active 
         <span class="mr-2"></span>
         <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
         @isset($faq)
         @if ($faq->status == 0)
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
     <br>
  


       

       <div class="form-group mb-2">
         <label for="answer"> Faq Answer</label>
         <textarea type="text" class="form-control @error('answer') is-invalid @enderror" placeholder="Page Meta Title" name="answer"  value="">{{ isset($faq) ? $faq->answer : old('answer ') }} </textarea>
         @error('answer')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>
      
       <div class="d-grid gap-2 mt-2">
        <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($faq) ? 'Update' : 'Add'}} faq</button>
         </div>    
    
     </form>
   </div>
 </div>

    
@endsection

@section('custom_JS')
 
<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

<script>


CKEDITOR.replace('answer', {
      height: 200,
    });
</script>


@endsection