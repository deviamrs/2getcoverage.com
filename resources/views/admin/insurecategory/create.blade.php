@extends('adminlayout.layout')

@section('admin_content')
 
<div class="card col-md-12 col-lg-8 mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <h6 class="m-0 font-weight-bold text-primary"><a href="javascript:void(0)" onclick="window.history.back(1)">Back</a> {{ isset($insureCategory) ? 'Edit '.$insureCategory->category_name : 'Add'}} Insurance Category </h6>
   </div>
   <div class="card-body">
   <form  action="{{ isset($insureCategory) ? route('insureCategory.update' , $insureCategory->id ) : route('insureCategory.store')  }}"  method="post" enctype="multipart/form-data">
    @csrf
       @isset($insureCategory)
            @method('PUT') 
       @endisset 
       <div class="row">
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="">Category Name</label>
              <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="" placeholder="Category Name" name="category_name"  value="{{ isset($insureCategory) ? $insureCategory->category_name : old('category_name') }}"> 
              @error('category_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong> 
              </span>
              @enderror
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="">Tip sub head</label>
              <input type="text" class="form-control @error('category_sub_head') is-invalid @enderror" id="" placeholder="Sub Heading" name="category_sub_head"  value="{{ isset($insureCategory) ? $insureCategory->category_sub_head : old('category_sub_head') }}"> 
              @error('category_sub_head')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong> 
              </span>
              @enderror
            </div>
          </div>
           
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="" placeholder="Slug" name="slug"  value="{{ isset($insureCategory) ? $insureCategory->slug : old('slug') }}"> 
              @error('slug')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong> 
              </span>
              @enderror
            </div>
          </div>

          {{-- <div class="col-md-6 mb-2">
            @isset($insuracetip)
            <img src="{{ asset('public/'.$insuracetip->image) }}" alt="" class="mb-2" style="width: 100px">
            @endisset
  
            <div class="form-group mb-2">
              <label for="floatingPassword">Image</label>
              <input type="file" class="form-control"  name="image">
              @error('image')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
            </div>
          </div> --}}
         
          <div class="col-md-6 mb-2">
            <div class="from-group">
              <label for="" class="d-block">Status</label>
              <input type="radio" name="status" value="1" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
              @isset($insureCategory)
              @if ($insureCategory->status == 1)
                  checked
              @endif
              @endisset >Active 
              <span class="mr-2"></span>
              <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
              @isset($insureCategory)
              @if ($insureCategory->status == 0)
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
              @isset($insureCategory)
              @if ($insureCategory->front_status == 1)
                  checked
              @endif
              @endisset >Active 
              <span class="mr-2"></span>
              <input type="radio" name="front_status" value="0" class="mr-2" class="custom-control-input @error('front_status') is-invalid @enderror"
              @isset($insureCategory)
              @if ($insureCategory->front_status == 0)
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
      <button type="submit" class="btn btn-primary btn-block text-capitalize">{{ isset($insureCategory) ? 'Update' : 'Add'}} Insurance Category</button>
       </div>
     </form>
   </div>
 </div>

    
@endsection


