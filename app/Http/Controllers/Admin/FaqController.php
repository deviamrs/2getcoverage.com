<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FaqCategory $faqCategory)
    {
        //

        return view('admin.faq.index')->withEntries(Faq::whereFaqCategoryId($faqCategory->id)->get())->withFaqCategory($faqCategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FaqCategory $faqCategory)
    {
        //
        return view('admin.faq.create')->withFaqCategory($faqCategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqCategory $faqCategory,Request $request)
    {
        //
        $request->validate([
          
            'question' => 'required|min:20',
            'answer'  => 'required',
            'status'  => 'required',

        ]);

        Faq::create([
              
            'faq_category_id' => $faqCategory->id,
            'question' => $request->question,
            'answer'  => $request->answer,
            'status'  => $request->status,
        
        ]);

        return redirect(route('faq.index' , $faqCategory->id))->withSuccess('Faq Added Successfully To '. $faqCategory->name);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqCategory $faqCategory, Faq $faq)
    {
        //
        return view('admin.faq.create')->withFaqCategory($faqCategory)->withFaq($faq);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(FaqCategory $faqCategory, Request $request, Faq $faq)
    {
        //

        $request->validate([
          
            'question' => 'required|min:20',
            'answer'  => 'required',
            'status'  => 'required',

        ]);

        $faq->update([
              
            'question' => $request->question,
            'answer'  => $request->answer,
            'status'  => $request->status,
        
        ]);

        return redirect(route('faq.index' , $faqCategory->id))->withSuccess('Faq Updated Successfully To '. $faqCategory->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqCategory $faqCategory,Faq $faq)
    {
        //

        $faq->delete();

        return redirect(route('faq.index' , $faqCategory->id))->withSuccess('Faq Delted Successfully To '. $faqCategory->name);
    }
}
