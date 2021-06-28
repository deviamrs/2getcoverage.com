@extends('adminlayout.layout')


@section('admin_content')
 
   <div class="card p-3">
         
         <div class="card-header py-3 d-flex flex-row justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">
             Company Listing
          </h6>
         @if ($entries->count() > 0)       
         <div class="d-flex justify-content-end pt-3" >
           <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Add Company</a>   
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
                        <th scope="col">Detail Cards</th>
                        <th scope="col">Content Sections</th>
                        <th scope="col">Status</th>
                        <th scope="col">Front Status</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
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
                             <td>
                              <a class="btn btn-sm btn-info btn-icon-split btn-sm" href="{{ route('companyDetailCard.index' ,$entry->id ) }}" title="company detail card listing">
                                 <span class="icon text-dark">
                                   {{ $entry->cardDetails->count() }}
                                 </span>
                              </a>
                              <a href="{{ route('companyDetailCard.create' ,$entry->id) }}" class="btn btn-primary btn-icon-split btn-sm" title="Add Company Detail Card">
                                <span class="text"> + Detail Card</span>
                              </a>
                            </td>
                             <td>
                              <a class="btn btn-sm btn-info btn-icon-split btn-sm" href="{{ route('companyContent.index' ,$entry->id ) }}" title="company detail card listing">
                                 <span class="icon text-dark">
                                   {{ $entry->cardDetails->count() }}
                                 </span>
                              </a>
                              <a href="{{ route('companyContent.create' ,$entry->id) }}" class="btn btn-primary btn-icon-split btn-sm" title="Add Company Content">
                                <span class="text"> + Content</span>
                              </a>
                            </td>
                             <td>  
                              @if ($entry->status)
                              <span class="badge rounded-pill bg-success">Active</span>
                              @else
                              <span class="badge rounded-pill bg-secondary">Not Active</span>
                              @endif
                             </td>
                             <td>  
                              @if ($entry->front_status)
                              <span class="badge rounded-pill bg-success">Active</span>
                              @else
                              <span class="badge rounded-pill bg-secondary">Not Active</span>
                              @endif
                             </td>
                             <td><a href="{{ route('company.edit' , $entry->id) }}" class="btn btn-sm btn-info">Edit</a></td>
                             <td><form action="{{ route('company.destroy' , $entry->id) }}" method="POST">@csrf @method('DELETE')<button type="submit" class="btn btn-sm btn-danger">Delete</button></form></td>
                           </tr>
                            @endforeach
                        @endif
                    @endisset
                    </tbody>
            </table>
          </div>
   </div>



@endsection