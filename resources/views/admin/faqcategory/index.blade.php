@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')

<div class="row">
   <!-- Datatables -->
  
   <!-- DataTable with Hover -->
   <div class="col-lg-12">
     <div class="card mb-4">
       <div class="card-header py-3 d-flex flex-row justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">
          Faq Category Listing
         </h6>
        @if ($entries->count() > 0)       
        <div class="d-flex justify-content-end pt-3" >
          <a href="{{ route('faqCategory.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>Add faqcategory</a>   
          </div>    
        @endif 
       </div>
      
       @if ($entries->count() > 0)
       <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover">
           <thead class="thead-light">
             <tr>

               <th>#</th>
               <th>Name</th>
               <th>Action</th>  
               <th>Action</th>  
               <th>Action</th>  
             
             </tr>
           </thead>
           <tbody>  
               @foreach ($entries as $faqcategory)
                   <tr>
                      <th>#</th>
                      <td>
                         {{ $faqcategory->name  }} 
                      </td>
                     
                      <td>
                        <a class="btn btn-sm btn-info btn-icon-split btn-sm" href="{{ route('faq.index' ,$faqcategory->id ) }}">
                           <span class="icon text-dark">
                              {{ $faqcategory->faqs->count() }}
                           </span>
                           <span >See Faq's</span>
                        </a>
                        <a href="{{ route('faq.create' , $faqcategory->id) }}" class="btn btn-primary btn-icon-split btn-sm">
                          <span class="text"> + Add Faq</span>
                        </a>
                      </td>
                      <td>
                        <a href="{{ route('faqCategory.edit' , $faqcategory->id) }}" class="btn btn-primary btn-icon-split btn-sm">
                           <span class="icon text-white-50">
                              <i class="fas fa-pen"></i>
                           </span>
                           <span class="text">Edit</span>
                         </a>
                      </td>
                      <td>
                         <form action="{{ route('faqCategory.destroy' , $faqcategory->id) }}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-50">
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
         @include('adminlayout.includes.nodata', ['data' => "Sorry No faqcategory Found" , 'route_name' => 'faqCategory'])
       @endif
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