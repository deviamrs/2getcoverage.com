<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Company;
use App\Models\ContactFormDetail;
use App\Models\FaqCategory;
use App\Models\InsuranceTip;
use App\Models\Post;
use App\Models\Review;
use App\Models\Tag;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
         


        return view('home')->with(
                'counter',

                [
                    'teams' => Team::all()->count(),
                    'company' => Company::all()->count(),
                    'posts' => Post::all()->count(),
                    'category' => Category::all()->count(),
                    'tags' => Tag::all()->count(),
                    'reviews' => Review::all()->count(),
                    'tips' => InsuranceTip::all()->count(),
                    'faqcat' => FaqCategory::all()->count(),
                    'enq' => ContactFormDetail::all()->count(),

                ]
            );;
    }
}
