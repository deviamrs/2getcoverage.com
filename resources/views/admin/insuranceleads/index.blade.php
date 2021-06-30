@section('title' , 'Insurance Leads -- List')
@extends('adminlayout.layout')

@section('admin_content')

<div class="row">
   <!-- Datatables -->
  
   <!-- DataTable with Hover -->
   <div class="col-lg-12">
     <div class="card mb-4">
       <div class="card-header py-3 d-flex flex-row justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">
            Insurance Leads 
         </h6>
        
       </div>
      
      
       <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover">
           <thead class="thead-light">
             <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Ph Number</th>
                <th>Address</th>
                <th>Policy Type</th>
                <th>Action</th>
             </tr>
           </thead>
           <tbody>  
               @forelse ($lead as $l)
                   <tr>
                      <th>{{ $l->id }}</th>
                      <td>{{ $l->first_name  }} {{' '}}{{ $l->last_name }}</td>
                      <td>{{ $l->email  }} </td>
                      <td>{{ $l->mobile  }} </td>
                      <td>{{ $l->street_address  }} </td>
                      <td>{{ $l->vehicle_trin  }} </td>
                     <td>
                        <a href="{{ route('insurancelead.show' , $l->id) }}" class="btn btn-primary btn-sm">
                           <span class="icon text-white-50">
                              <i class="fas fa-pen"></i>
                           </span>
                           <span class="text">Show</span>
                         </a>
                        <a href="{{ route('insurancelead.show' , $l->id) }}" class="btn btn-success btn-sm">
                           <span class="icon text-white-50">
                              <i class="fas fa-pen"></i>
                           </span>
                           <span class="text">Assign</span>
                         </a>
                      </td>
                      {{-- <td>
                         <form action="{{ route('staticPage.destroy' ,[$pageCategory->id, $page->id]) }}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger btn-sm"><span class="icon text-white-50">
                              <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Delete</span></button>
                         </form>   
                      </td> --}}
                   </tr>
                   @empty
                   <tr>
                       <td colspan="5">No Insurance Lead</td>                   
               @endforelse
           </tbody>
         </table>
       </div>
    
     </div>
   </div>
 </div>

@endsection


@section('custom_JS')
<script src="{{asset('public/adminDesign/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/adminDesign/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script>
  $(document).ready(function () {
    $('#dataTable').DataTable(); // ID From dataTable 
    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
  });
</script>
@endsection