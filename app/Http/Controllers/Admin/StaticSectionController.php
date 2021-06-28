<?php 
 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StaticSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaticSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.staticsection.index')->withEntries(StaticSection::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.staticsection.create');
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

            'heading' => 'required|min:4',
            'sub_heading' => 'required|max:255',
            'section_content' => 'required',
            'image' => 'required|mimes:jpg,png,webp|max:250',

        ]);


        $image_name = time().$request->image->getClientOriginalName();

        $image_path = Storage::putFileAs('backend/staticsection', $request->image , $image_name); 

        StaticSection::create([
            
            'heading' => $request->heading,
            'image' => $image_path,
            'sub_heading' => $request->sub_heading,
            'section_content' => $request->section_content,

        ]);

        return redirect(route('staticSection.index'))->withSuccess('Static Section Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaticSection  $staticSection
     * @return \Illuminate\Http\Response
     */
    public function show(StaticSection $staticSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaticSection  $staticSection
     * @return \Illuminate\Http\Response
     */
    public function edit(StaticSection $staticSection)
    {
        //

        return view('admin.staticsection.create')->withStaticSection($staticSection);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaticSection  $staticSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaticSection $staticSection)
    {
        //

        $request->validate([

            'heading' => 'required|min:4',
            'sub_heading' => 'required|max:255',
            'section_content' => 'required',

        ]);
      
        $data['heading'] = $request->heading;
        $data['sub_heading'] = $request->sub_heading;

        if ($request->has('image')) {

            $request->validate(['image' => 'required|mimes:jpg,png,webp|max:250'])   ;

            $image_name = time().$request->image->getClientOriginalName();

            $image_path = Storage::putFileAs('backend/staticsection', $request->image , $image_name); 
          
            $data['image'] = $image_path;

            try {
                 if (Storage::exists($staticSection->image)) {
                     Storage::delete($staticSection->image);
                 }

            } catch (\Throwable $th) {        }
              
        }

        $data['section_content'] = $request->section_content;

    
        $staticSection->update($data);

        return redirect(route('staticSection.index'))->withSuccess('Static Section Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaticSection  $staticSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaticSection $staticSection)
    {
        //

        try {
            if (Storage::exists($staticSection->image)) {
                Storage::delete($staticSection->image);
            }

       } catch (\Throwable $th) {        }
       
       $staticSection->delete();

       return redirect(route('staticSection.index'))->withSuccess('Static Section Removed Successfully');
    }
}
