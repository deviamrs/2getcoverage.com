@extends('adminlayout.layout')


@section('admin_content')
 
   <div class="card p-3">
    <div class="card-header py-3 d-flex flex-row justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">
         Team Listing
      </h6>
     @if ($entries->count() > 0)       
     <div class="d-flex justify-content-end pt-3" >
       <a href="{{ route('team.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Add Member</a>   
       </div>    
     @endif 
    </div>

         <div class="table-responsive">
         
                  <table class="table table-hover">
                        <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Action</th>
                        <th scope="col">ACtion</th>
                      </tr>
                    </thead>
                    <tbody>
                        @isset($entries)
                        @if ($entries->count() > 0)
     
                            @foreach ($entries as $key=>$entry)
                            <tr>
                             <th scope="row">{{ $key+1 }}</th>
                             <td>{{ $entry->name }}</td>
                             <td><img src="{{ asset('public/'.$entry->image) }}" alt="" style="width: 100px"></td>
                             <td>{{ $entry->designation }}</td>
                             <td><a href="{{ route('team.edit' , $entry->id) }}" class="btn btn-sm btn-info">Edit</a></td>
                             <td><form action="{{ route('team.destroy' , $entry->id) }}" method="POST">@csrf @method('DELETE')<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></td>
                           </tr>
                            @endforeach
                            
                        @endif
                    @endisset
                     
                    </tbody>
                  
                    
              
            </table>
          </div>
   </div>



@endsection