<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          
        return view('admin.faqcategory.index')->withEntries(FaqCategory::orderByDesc('id')->get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.faqcategory.create');
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
        $request->validate(['name' => 'required|max:255|min:6|unique:faq_categories' , 'status' => 'required']);
        
        FaqCategory::create([
            
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status

        ]);

        return redirect()->route('faqCategory.index')->with('success' , 'Faq Category Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FaqCategory $faqCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqCategory $faqCategory)
    {
        //
        return view('admin.faqcategory.create')->withFaqCategory($faqCategory);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaqCategory $faqCategory)
    {
        //
        $request->validate(['name' => 'required|max:255|min:6|unique:faq_categories' , 'status' => 'required']);
        
        $faqCategory->update([
            
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status

        ]);

        return redirect()->route('faqCategory.index')->with('success' , 'Faq Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FaqCategory  $faqCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaqCategory $faqCategory)
    {
        //
        if ($faqCategory->faqs->count() > 0) {
            $faqCategory->faqs()->delete();
        }
        $faqCategory->delete();

        return redirect()->route('faqCategory.index')->with('success' , 'Faq Category Deleted Successfully');
    }
}
