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
             <a href="{{ route('faqCategory.index') }}"> {{ $faqCategory->name }}</a> Affiliated   Faq  Listing
         </h6>
        @if ($entries->count() > 0)       
        <div class="d-flex justify-content-end pt-3" >
          <a href="{{ route('faq.create' , $faqCategory->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Add faq</a>   
          </div>    
        @endif 
       </div>
      
       @if ($entries->count() > 0)
       <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover">
           <thead class="thead-light">
             <tr>

               <th>#</th>
               <th>Question</th>
               <th>Status</th>
               <th>Action</th>  
               <th>Action</th> 
             </tr>
           </thead>
           <tbody>  
               @foreach ($entries as $faq)
                   <tr>
                      <th>#</th>
                      <td>
                         {{ $faq->question  }} 
                      </td>
                     <td>
                        @if ($faq->status)
                         <button class="btn  btn-success btn-sm">Active</button>
                        @else
                         <button class="btn  btn-secondary btn-sm">Not Active</button>
                        @endif
                     </td>
                    
                     <td>
                        <a href="{{ route('faq.edit' , [$faqCategory->id, $faq->id]) }}" class="btn btn-primary btn-sm">
                           <span class="icon text-white-50">
                              <i class="fas fa-pen"></i>
                           </span>
                           <span class="text">Edit</span>
                         </a>
                      </td>
                      <td>
                         <form action="{{ route('faq.destroy' ,[$faqCategory->id, $faq->id]) }}" method="post">
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
       <div class="text-center p-5">
         <h5 class="text-primary">Sorry No Data Found</h5>
         <a href="{{ route('faq.create' , $faqCategory->id) }}" class="btn btn-primary btn-icon-split btn-sm">
           <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
           </span>
         <span class="text">Add Faq to {{ $faqCategory->name }}</span>
         </a>
       </div>
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