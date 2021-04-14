@extends('adminlayout.layout')


@section('admin_content')
 
   <div class="card p-3">
      <h5>{{ isset($team) ? 'Update '. $team->name  : 'Add'}} Team Member</h5>
       
      <div class="row mt-3">
         <form   class="col-md-6" action="{{ isset($team) ?   route('team.update' , $team->id)    : route('team.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
             @isset($team)
                  @method('PUT')
             @endisset
             <div class="form-group mb-2"> 
                 <label for="floatingInput">Email address</label>
                 <input type="text" class="form-control"  placeholder="Name"  name="name" value="{{ isset($team) ? $team->name : old('name') }}">
                 @error('name') <small class="text-sm text-danger">{{ $message }}</small>   @enderror
               </div>
               <div class="form-group mb-2">
                 <label for="floatingPassword">Designation</label>
                 <input type="text" class="form-control"  placeholder="Designation" name="designation" value="{{ isset($team) ? $team->designation : old('designation') }}">
                 @error('designation')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
               </div>
                 
               @isset($team)
                   <img src="{{ asset('public/'.$team->image) }}" alt="" class="mb-2" style="width: 100px">
               @endisset

               <div class="form-group mb-2">
                 <label for="floatingPassword">Image</label>
                 <input type="file" class="form-control"  name="image">
                 @error('image')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
               </div>
               <div class="form-group mb-2" wire:ignore>
                 <label for="floatingPassword"></label>
                 <textarea name="description" id="description" rows="10"  name="description">{{ isset($team) ? $team->description : old('description') }}</textarea>
                 @error('description')<small class="text-sm text-danger">{{ $message }}</small>  @enderror
               </div>
               <div class="d-grid gap-2">
                 <button class="btn btn-primary" type="submit">{{ isset($team) ? 'Update' : 'Add'}} Member</button>
               </div>
         </form>
     </div>
     <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
     
     <script>
         CKEDITOR.replace( 'description' , {
             height : 200,
         } );
     </script>

   </div>

@endsection