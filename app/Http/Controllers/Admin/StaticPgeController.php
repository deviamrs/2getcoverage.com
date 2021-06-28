<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class StaticPgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.staticpage.index')->withEntries(StaticPage::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.staticpage.create');
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
            'page_name' => 'required', 
            'heading' => 'required|min:4',
            'page_content' => 'required'

        ]);

         
        StaticPage::create([
            
            'page_name' => $request->page_name,
            'heading' => $request->heading,
            'sub_heading' => $request->sub_heading,
            'page_content' => $request->page_content,


        ]);


        return redirect(route('staticPage.index'))->withSuccess('Static Page Added Successfully');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function show(StaticPage $staticPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function edit(StaticPage $staticPage)
    {
        //

        return view('admin.staticpage.create')->withStaticPage($staticPage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaticPage $staticPage)
    {
        //

        $request->validate([
             
            'heading' => 'required|min:4',
            'page_content' => 'required'

        ]);

         
        $staticPage->update([
     
            'heading' => $request->heading,
            'sub_heading' => $request->sub_heading,
            'page_content' => $request->page_content,


        ]);


        return redirect(route('staticPage.index'))->withSuccess('Static Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaticPage  $staticPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaticPage $staticPage)
    {
        //
    }
}
