
   

    
@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')



<div class="row">
   <!-- Datatables -->
  
   <!-- DataTable with Hover -->
   <div class="col-lg-12">
     <div class="card mb-4">
       <div class="card-header py-3 d-flex flex-row  justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">tip  Listing </h6>
         @if ($tips->count() > 0)
          
         <div class="d-flex justify-content-end" >
           <a href="{{ route('insuranceTip.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Add tip</a>   
           </div>    
         @endif 
       </div>
    

       @if ($tips->count() > 0)
       <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover" >
           <thead class="thead-light">
             <tr>
               <th>#</th>
               <th>Tip Name</th>
               <th>Section Details</th>
               <th>Status</th>  
               <th>Front Status</th>  
               <th>Action</th>  
               <th>Action</th>  
             </tr>
           </thead>
           <tbody>  
               @foreach ($tips as  $key=>$tip)
                   <tr>
                     <td>{{ $key+1 }}</td>
                      <td>
                         {{ $tip->tip_name  }}
                      </td>
                      <td>
                        <a href="{{ route('tipContent.index' , $tip->id) }}" class="btn btn-info btn-sm" title="{{ $tip->tip_name }} Content Listing">{{  $tip->tipsections->count()  }}</a>
                        <a href="{{ route('tipContent.create' , $tip->id) }}" class="btn btn-primary btn-sm" title="Add Content To {{ $tip->tip_name }}"> + Add Content</a>
                      </td>
                      <td>  
                        @if ($tip->status)
                        <span class="badge rounded-pill bg-success">Active</span>
                        @else
                        <span class="badge rounded-pill bg-secondary">Not Active</span>
                        @endif
                       </td>
                       <td>  
                        @if ($tip->front_status)
                        <span class="badge rounded-pill bg-success">Active</span>
                        @else
                        <span class="badge rounded-pill bg-secondary">Not Active</span>
                        @endif
                       </td>
                      
                      <td>
                        <a href="{{ route('insuranceTip.edit' , $tip->id) }}" class="btn btn-primary btn-sm">
                           <span class="icon text-white-50">
                              <i class="fas fa-pen"></i>
                           </span>
                           <span class="text">Edit</span>
                         </a>
                      </td>
                      <td>
                         <form action="{{ route('insuranceTip.destroy' , $tip->id) }}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger btn-sm"><span class="icon text-white-50">
                              <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Delete</span></button>
                         </form>   
                      </td>
                   </tr>
               @endforeach
           </tbody>
         </table>
       </div>
       @else
         @include('adminlayout.includes.nodata', ['data' => "Sorry No tip Found" , 'route_name' => 'insuranceTip'])
       @endif
     </div>
   </div>
 </div>

@endsection


