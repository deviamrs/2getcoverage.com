@extends('adminlayout.layout')


@section('admin_content')
 
   <div class="card p-3">
         <h5 class="mb-3">Teams Listing</h5>

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