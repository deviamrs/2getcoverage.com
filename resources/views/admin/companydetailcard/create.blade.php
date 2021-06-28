@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')

<div class="card col-md-6 col-lg-6 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($companyDetailCard) ? 'Edit' : 'Add'}} To <a href="{{ route('company.index') }}">{{ $company->name }}</a>  </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($companyDetailCard) ? route('companyDetailCard.update' , [$company->id , $companyDetailCard->id] ) : route('companyDetailCard.store' , $company->id) }}"  method="post">
       @csrf
       @isset($companyDetailCard)
            @method('PUT') 
       @endisset 
       <div class="form-group">
         <label for="card_content"> Heading</label>
         <textarea type="text" class="form-control @error('heading') is-invalid @enderror" placeholder="Page Meta Title" name="heading"  value="">{{ isset($companyDetailCard) ? $companyDetailCard->heading : old('heading') }} </textarea>
         @error('heading')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>  
       <br>
          
       <div class="row">
         <div class="col-md-6">
          <div class="from-group">
            <label for="" class="d-block">Detail Card Status</label>
            <input type="radio" name="status" value="1" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
   
            @isset($companyDetailCard)
            @if ($companyDetailCard->status == 1)
                checked
            @endif
            @endisset >Active 
            <span class="mr-2"></span>
            <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
            @isset($companyDetailCard)
            @if ($companyDetailCard->status == 0)
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
         <div class="col-md-6">
          <div class="from-group">
            <label for="" class="d-block">Card Width</label>
            <input type="radio" name="card_width" value="1" class="mr-2" class="custom-control-input @error('card_width') is-invalid @enderror"
   
            @isset($companyDetailCard)
            @if ($companyDetailCard->card_width == 1)
                checked
            @endif
            @endisset >Full
            <span class="mr-2"></span>
            <input type="radio" name="card_width" value="0" class="mr-2" class="custom-control-input @error('card_width') is-invalid @enderror"
            @isset($companyDetailCard)
            @if ($companyDetailCard->card_width == 0)
                checked
            @endif
            @endisset
             >Half
            @error('card_width') <br>
            <span class="text-danger" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror
           </div>
         </div>
       </div>

       
     <br>
  


       

       <div class="form-group mb-2">
         <label for="card_content"> Card Content</label>
         <textarea type="text" class="form-control @error('card_content') is-invalid @enderror" placeholder="Page Meta Title" name="card_content"  value="">{{ isset($companyDetailCard) ? $companyDetailCard->card_content : old('card_content') }} </textarea>
         @error('card_content')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>
      
       <div class="d-grid gap-2 mt-2">
        <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($companyDetailCard) ? 'Update' : 'Add'}} companyDetailCard</button>
         </div>    
    
     </form>
   </div>
 </div>

    
@endsection

@section('custom_JS')
 
<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

<script>


CKEDITOR.replace('card_content', {
      height: 200,
    });
</script>


@endsection