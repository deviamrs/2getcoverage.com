<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.review.index')->withReviews(Review::orderByDesc('id')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
       $request->validate([
           
          'name' => 'required|max:25',
           'rating_score' => 'required',
       ]);  

       $data['name'] = $request->name;
         
       if ($request->location != null ) { $data['location'] = $request->location; }

       if ($request->content != null ) { $data['content'] = $request->content; }

       if ($request->status) { $data['status'] = $request->status; }

       if ($request->front_status) { $data['front_status'] = $request->front_status; }

       $data['rating_score'] = $request->rating_score;

       $ratingArray = $this->calucateStars($data['rating_score']);

       $data['full_stars'] = $ratingArray['full_stars'];

       $data['half_stars'] = $ratingArray['half_stars'];

       $data['empty_stars'] = $ratingArray['empty_stars'];

       Review::create($data);
                  
       return redirect(route('review.index'))->withSuccess('Review Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //

        return view('admin.review.create')->withReview($review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //

        $request->validate([
           
            'name' => 'required|max:25',
             'rating_score' => 'required',
         ]);  
  
         $data['name'] = $request->name;
           
         if ($request->location != null ) { $data['location'] = $request->location; }
  
         if ($request->content != null ) { $data['content'] = $request->content; }
  
         if ($request->status) { $data['status'] = $request->status; }
  
         if ($request->front_status) { $data['front_status'] = $request->front_status; }
  
         $data['rating_score'] = $request->rating_score;
  
         $ratingArray = $this->calucateStars($data['rating_score']);
  
         $data['full_stars'] = $ratingArray['full_stars'];
  
         $data['half_stars'] = $ratingArray['half_stars'];
  
         $data['empty_stars'] = $ratingArray['empty_stars'];
  
         $review->update($data);
                    
         return redirect(route('review.index'))->withSuccess('Review Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
        $review->delete();

        return redirect(route('review.index'))->withSuccess('Review Removed Successfully');
    }


    public function calucateStars($rating_value){
    
       $full_stars = (int)floor((round($rating_value)));
       $half_stars  = $this->calulateHalfStars($rating_value);
       $empty_stars = (int)floor(5  - ceil($rating_value));
   

       return [
              
         'full_stars' => $full_stars,
         'half_stars'  => $half_stars,
         'empty_stars' => $empty_stars,

       ];
    
    }

    public function calulateHalfStars($rating_value){

         $half_stars =  round($rating_value - floor($rating_value)) * 100;
      
         return $half_stars > 0 ? 0 : 1;
    }
}
