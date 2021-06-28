
   

    
@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')



<div class="row">
   <!-- Datatables -->
  
   <!-- DataTable with Hover -->
   <div class="col-lg-12">
     <div class="card mb-4">
       <div class="card-header py-3 d-flex flex-row  justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary"> Enquiry Listing</h6>
        
       </div>
  
       @if ($entries->count() > 0)
       <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover" >
           <thead class="thead-light">
             <tr>
               <td>#</td>
               <th>Name</th>
               <th>Email</th>  
               <th>Phone</th>  
              
             </tr>
           </thead>
           <tbody>  
               @foreach ($entries as  $key=>$entry)
                   <tr>
                     <td>{{ $key+1 }}</td>
                      <td>
                         {{ $entry->name }}
                      </td>
                      <td>
                        <a href="mailto:{{$entry->email }}">{{ $entry->email }}</a> 
                      </td>
                      <td>
                         <a href="tel:{{ $entry->phone }}"> {{ $entry->phone }}</a>                
                      </td>
                   </tr>
                   <tr>
                      <td> <th>Message</th></td>
                      <td colspan="3">
                        <p>{{ $entry->message }}</p>
                      </td>
                   </tr>
                   
               @endforeach
           </tbody>
         </table>
       </div>
       @else
           <h5>No Data Available</h5>
       @endif
     </div>
   </div>
 </div>

@endsection


