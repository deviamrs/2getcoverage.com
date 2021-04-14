<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.team.index')->withEntries(Team::orderByDesc('id')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.team.create');
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

            'name' => 'required|min:6|max:25',
            'designation' => 'required|min:3|max:25',
            'image' => 'required|mimes:jpg,png,webp|max:250',
            

        ]);


        $data['name'] = $request->name;
        $data['designation'] = $request->designation;


        $image_name = time().$request->image->getClientOriginalName();
   
        

        $image_path = Storage::putFileAs('backend/teams', $request->image , $image_name); 
           
        $data['image'] = $image_path;
      
        $data['description']  = $request->description; 

        Team::create($data);

        return redirect(route('team.index'))->withSuccess('Member Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
         return view('admin.team.create')->withTeam($team);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //

        $request->validate([

            'name' => 'required|min:6|max:25',
            'designation' => 'required|min:3|max:25',
      
            

        ]);


        $data['name'] = $request->name;
        $data['designation'] = $request->designation;

        
        if ($request->has('image')) {

            $request->validate(['image' => 'required|mimes:jpg,png,webp|max:250'])   ;

            $image_name = time().$request->image->getClientOriginalName();
   
            $image_path = Storage::putFileAs('backend/teams', $request->image , $image_name); 
          
            $data['image'] = $image_path;


            try {
                 if (Storage::exists($team->image)) {
                     Storage::delete($team->image);
                 }

            } catch (\Throwable $th) {        }
              
     

            
        }

      
           
      
      
        $data['description']  = $request->description; 

        $team->update($data);

        return redirect(route('team.index'))->withSuccess('Member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        
        try {
            if (Storage::exists($team->image)) {
                Storage::delete($team->image);
            }

       } catch (\Throwable $th) {        }
          
       $team->delete();

       return redirect(route('team.index'))->withSuccess('Member Removed Successfully');
          
    }
}
