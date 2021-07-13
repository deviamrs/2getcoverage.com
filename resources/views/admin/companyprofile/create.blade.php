@extends('adminlayout.layout')


@section('admin_content')

   <div class="card p-3">
      <h5>{{ isset($company) ? 'Update '. $company->name  : 'Add'}} Company</h5>

      <div class="row mt-3">
         <form   class="col-md-6" action="{{ isset($company) ?   route('company.update' , $company->id)    : route('company.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
             @isset($company)
                  @method('PUT')
             @endisset
             <div class="form-group mb-2">
                 <label for="floatingInput">Name</label>
                 <input type="text" class="form-control"  placeholder="Name"  name="name" value="{{ isset($company) ? $company->name : old('name') }}">
                 @error('name') <small class="text-sm text-danger">{{ $message }}</small>   @enderror
             </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="from-group">
                    <label for="" class="d-block">Status</label>
                    <input type="radio" name="status" value="1" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
                    @isset($company)
                    @if ($company->status == 1)
                        checked
                    @endif
                    @endisset >Active
                    <span class="mr-2"></span>
                    <input type="radio" name="status" value="0" class="mr-2" class="custom-control-input @error('status') is-invalid @enderror"
                    @isset($company)
                    @if ($company->status == 0)
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
                    <label for="" class="d-block">Front Status</label>
                    <input type="radio" name="front_status" value="1" class="mr-2" class="custom-control-input @error('front_status') is-invalid @enderror"
                    @isset($company)
                    @if ($company->front_status == 1)
                        checked
                    @endif
                    @endisset >Active
                    <span class="mr-2"></span>
                    <input type="radio" name="front_status" value="0" class="mr-2" class="custom-control-input @error('front_status') is-invalid @enderror"
                    @isset($company)
                    @if ($company->front_status == 0)
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




               @isset($company)
                   <img src="{{ asset('public/'.$company->image) }}" alt="" class="mb-2" style="width: 100px">
               @endisset

               <div class="form-group mb-2">
                 <label for="floatingPassword">Image</label>
                 <input type="file" class="form-control"  name="image">
                 @error('image')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
               </div>
               <div class="form-group mb-2">
                 <label for="floatingPassword">Front Details</label>
                 <textarea name="front_details" id="front_details" rows="10"  class="form-control">{{ isset($company) ? $company->front_details : old('front_details') }}</textarea>
                 @error('front_details')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
               </div>
               <div class="d-grid gap-2">
                 <button class="btn btn-primary" type="submit">{{ isset($company) ? 'Update' : 'Add'}} Company</button>
               </div>
         </form>
     </div>
     {{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

     <script>
         CKEDITOR.replace( 'front_details' , {
             height : 200,
         } );
     </script> --}}

   </div>

@endsection
