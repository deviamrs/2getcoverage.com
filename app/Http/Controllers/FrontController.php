<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function homePage(){
          
        $blogs = Post::orderBy('publish_date' , 'desc')->where('publish_date' , '!=' , null)->where('publish' , 1)->get();
        $companies = Company::orderByDesc('id')->whereFrontStatus(1)->whereStatus(1)->get(); 

        return view('front.home')
        ->withBlogs($blogs)
        ->withCompanies($companies);
    }


    public function companylist(){

        $companies = Company::orderByDesc('id')->whereFrontStatus(1)->whereStatus(1)->get(); 
        return view('front.companylist')->withCompanies($companies);
    }


    public function companysingle($slug){
         
        $company = Company::whereSlug($slug)->first();

        if ($company != null) {
            return view('front.company')->withCompany($company);
        }

    }

    public function about(){    return view('front.about');     }

    public function ourstory(){    return view('front.ourstory');     }

    public function leadership(){  
        
        $members =  Team::all();

        return view('front.leadership')->withMembers($members);  
    
    
    }


    public function contact(){
        return view('front.contact');
    }

          


}
