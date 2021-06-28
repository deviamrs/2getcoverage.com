
   

    
@section('title' , 'Super Category -- List')
@extends('adminlayout.layout')

@section('admin_content')



<div class="row">
   <!-- Datatables -->
  
   <!-- DataTable with Hover -->
   <div class="col-lg-12">
     <div class="card mb-4">
       <div class="card-header py-3 d-flex flex-row  justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">Review  Listing </h6>
         @if ($reviews->count() > 0)
          
         <div class="d-flex justify-content-end" >
           <a href="{{ route('review.create') }}" class="btn btn-primary btns-m"><i class="fas fa-pen"></i> Add review</a>   
           </div>    
         @endif 
       </div>
     
 

       @if ($reviews->count() > 0)
       <div class="table-responsive p-3">
         <table class="table align-items-center table-flush table-hover mb-5" id="dataTableHover" >
           <thead class="thead-light">
             <tr>
               <th>Name</th>
               <th>Location</th>
               <th>Rating</th>  
               <th>Status</th>  
               <th>Front Status</th>  
               <th>Action</th>  
               <th>Action</th>  
             </tr>
           </thead>
           <tbody>  
               @foreach ($reviews as $review)
                   <tr>
                      <td>
                         {{ $review->name  }}
                      </td>
                      <td>
                         {{ $review->location  }}
                      </td>
                     <td>            
                     @for ($i = 0; $i < $review->full_stars; $i++)  <i class="fas fa-star"></i>   @endfor  
                     @if ($review->half_stars == 1)  <i class="fas fa-star-half-alt"> </i> @endif
                     @if ( $review->empty_stars > 0)
                        @for ($i = 0; $i < $review->empty_stars; $i++) <i class="far fa-star"></i>   @endfor
                     @endif
                     
                   
                    </td> 
                      

                      <td>  
                        @if ($review->status)
                        <span class="badge rounded-pill bg-success">Active</span>
                        @else
                        <span class="badge rounded-pill bg-secondary">Not Active</span>
                        @endif
                       </td>
                       <td>  
                        @if ($review->front_status)
                        <span class="badge rounded-pill bg-success">Active</span>
                        @else
                        <span class="badge rounded-pill bg-secondary">Not Active</span>
                        @endif
                       </td>
                      
                      <td>
                        <a href="{{ route('review.edit' , $review->id) }}" class="btn btn-primary btn-icon-split btn-sm">
                           <span class="icon text-white-50">
                              <i class="fas fa-pen"></i>
                           </span>
                           <span class="text">Edit</span>
                         </a>
                      </td>
                      <td>
                         <form action="{{ route('review.destroy' , $review->id) }}" method="post">
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
         @include('adminlayout.includes.nodata', ['data' => "Sorry No review Found" , 'route_name' => 'review'])
       @endif
     </div>
   </div>
 </div>

@endsection


