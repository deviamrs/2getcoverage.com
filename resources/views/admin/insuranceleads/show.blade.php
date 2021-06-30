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
            View Insurance Leads 
         </h6>
        
       </div>
      
      
       <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover">
           <thead class="thead-light">
               <tr><th>Id</th><td>{{ $l->id }}</td>  <th>Name</th> <td>{{ $l->first_name  }} {{' '}}{{ $l->last_name }}</td><th>Mobile</th> <td>{{ $l->mobile  }}</td></tr>
        </thead>
        <tbody>
            <tr><th>Email</th><td>{{ $l->email }}</td>  <th>Address</th> <td>{{ $l->street_address  }}</td></tr>
            <tr><th>car_year</th><td>{{ $l->car_year }}</td>  <th>current_insurance</th> <td>{{ $l->current_insurance  }}</td></tr>
            <tr><th>vehicle_maker</th><td>{{ $l->vehicle_maker }}</td>  <th>insurance_duration</th> <td>{{ $l->insurance_duration  }}</td></tr>
            <tr><th>vehicle_maker_other</th><td>{{ $l->vehicle_maker_other }}</td>  <th>gender</th> <td>{{ $l->gender  }}</td></tr>
            <tr><th>vehicle_model</th><td>{{ $l->vehicle_model }}</td>  <th>is_married</th> <td>{{ $l->is_married  }}</td></tr>
            <tr><th>vehicle_trin</th><td>{{ $l->vehicle_trin }}</td>  <th>home_owner</th> <td>{{ $l->home_owner  }}</td></tr>
            <tr><th>park_at_home</th><td>{{ $l->park_at_home }}</td>  <th>recieve_renter_qoute</th> <td>{{ $l->recieve_renter_qoute  }}</td></tr>
            <tr><th>has_insurance</th><td>{{ $l->has_insurance }}</td>  <th>at_fault_accident</th> <td>{{ $l->at_fault_accident  }}</td></tr>
            <tr><th>is_ticketed</th><td>{{ $l->is_ticketed }}</td>  <th>dui_convinction</th> <td>{{ $l->dui_convinction  }}</td></tr>
            <tr><th>is_members_of_us_army</th><td>{{ $l->is_members_of_us_army }}</td>  <th>birthday</th> <td>{{ $l->birthday  }}</td></tr>
            <tr><th>has_insurance</th><td>{{ $l->has_insurance }}</td>  <th>at_fault_accident</th> <td>{{ $l->at_fault_accident  }}</td></tr>
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