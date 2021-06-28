
   

    
@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')



<div class="row">
   <!-- Datatables -->
  
   <!-- DataTable with Hover -->
   <div class="col-lg-12">
     <div class="card mb-4">
       <div class="card-header py-3 d-flex flex-row  justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary"> <a href="{{ route('insuranceTip.index') }}">Tip Listing /</a>{{ $insuranceTip->tip_name }} Section Listing </h6>
         @if ($tipContents->count() > 0)
          
         <div class="d-flex justify-content-end" >
           <a href="{{ route('tipContent.create' , $insuranceTip->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Add Tip Section</a>   
           </div>    
         @endif 
       </div>
  
       @if ($tipContents->count() > 0)
       <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover" >
           <thead class="thead-light">
             <tr>
               <td>#</td>
               <th>Section Name</th>
               <th>Status</th>  
               <th>Action</th>  
               <th>Action</th>  
             </tr>
           </thead>
           <tbody>  
               @foreach ($tipContents as  $key=>$tip)
                   <tr>
                     <td>{{ $key+1 }}</td>
                      <td>
                         <h3 class="text-primary"> Section  {{ $tip->id }}</h3>
                      </td>
                      
                      <td>  
                        @if ($tip->status)
                        <span class="badge rounded-pill bg-success">Active</span>
                        @else
                        <span class="badge rounded-pill bg-secondary">Not Active</span>
                        @endif
                       </td>


                     
                      
                      <td>
                        <a href="{{ route('tipContent.edit' , [$insuranceTip->id,$tip->id]) }}" class="btn btn-primary btn-sm">
                           <span class="icon text-white-50">
                              <i class="fas fa-pen"></i>
                           </span>
                           <span class="text">Edit</span>
                         </a>
                      </td>
                      <td>
                         <form action="{{ route('tipContent.destroy' , [$insuranceTip->id,$tip->id]) }}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger btn-sm"><span class="icon text-white-50">
                              <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Delete</span></button>
                         </form>   
                      </td>

                   </tr>
                   <tr>
                      <td colspan="5">
                         {!! $tip->tip_content  !!}
                      </td>
                   </tr>
                   <hr>
               @endforeach
           </tbody>
         </table>
       </div>
       @else
         @include('adminlayout.includes.nodata2', ['data' => "Sorry No tip Content Found" , 'route_name' => 'tipContent' , 'route_id' => $insuranceTip->id])
       @endif
     </div>
   </div>
 </div>

@endsection


