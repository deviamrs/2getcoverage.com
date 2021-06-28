@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')

<div class="card col-md-10  mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary">{{ isset($insuranceType) ? 'Edit' : 'Add'}} Insurance Type To <a href="{{ route('insureCategory.index') }}" title="Insuracne Category List">{{ $insureCategory->category_name }} </a> </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($insuranceType) ? route('insuranceType.update' , [$insureCategory->id , $insuranceType->id] ) : route('insuranceType.store' , $insureCategory->id) }}"  method="post">
       @csrf
       @isset($insuranceType)
            @method('PUT') 
       @endisset 
       
       <div class="row">
         <div class="col-md-6">
          <div class="form-group">
            <label for="insurance_content">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name"  value="{{ isset($insuranceType) ? $insuranceType->name : old('name') }}" style="resize: vertical; overflow:auto">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>  
         </div>
         <div class="col-md-6">
          <div class="form-group">
            <label for="insurance_content">Sub Heading</label>
            <input type="text" class="form-control @error('sub_heading') is-invalid @enderror" placeholder="Sub Heading" name="sub_heading"  value="{{ isset($insuranceType) ? $insuranceType->sub_heading : old('sub_heading') }}">
            @error('sub_heading')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>  
         </div>
         <div class="col-md-6">
          <div class="form-group">
            <label for="insurance_content"> Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" name="slug"  value="{{ isset($insuranceType) ? $insuranceType->slug : old('slug') }}">
            @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>  
         </div>
         <div class="col-md-6">
          <div class="from-group">
            <label for="" class="d-block">Status</label>
            <input type="radio" name="status" value="1" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
   
            @isset($insuranceType)
            @if ($insuranceType->status == 1)
                checked
            @endif
            @endisset >Active 
            <span class="mr-2"></span>
            <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
            @isset($insuranceType)
            @if ($insuranceType->status == 0)
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

       <div class="form-group mb-2">
         <label for="insurance_content">Insurance Content</label>
         <textarea type="text" class="form-control @error('insurance_content') is-invalid @enderror" placeholder="Page Meta Title" name="insurance_content"  value="">{{ isset($insuranceType) ? $insuranceType->insurance_content : old('insurance_content ') }} </textarea>
         @error('insurance_content')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>
      
       <div class="d-grid gap-2 mt-2">
        <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($insuranceType) ? 'Update' : 'Add'}} insurance Type</button>
         </div>    
    
     </form>
   </div>
 </div>

    
@endsection

@section('custom_JS')
 
<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

<script>


CKEDITOR.replace('insurance_content', {
      height: 200,
    });
</script>


@endsection