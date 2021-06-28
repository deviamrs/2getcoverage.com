<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\InsuranceTip;
use App\Models\Post;
use App\Models\Review;
use App\Models\StaticPage;
use App\Models\StaticSection;
use App\Models\Tag;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontController extends Controller
{
  //

  public $viewPath = 'front.page.';

  public function homePage()
  {

    $blogs = Post::orderBy('publish_date', 'desc')->where('publish_date', '!=', null)->where('publish', 1)->whereFeatured(1)->get();
    $companies = Company::orderByDesc('id')->whereFrontStatus(1)->whereStatus(1)->get();
    $tips = InsuranceTip::orderByDesc('id')->whereFrontStatus(1)->whereStatus(1)->get();
    $reviews = Review::orderByDesc('id')->whereFrontStatus(1)->whereStatus(1)->get();
    $aboutsection = StaticSection::findOrFail(1);

    return view($this->viewPath . 'home')
      ->withBlogs($blogs)
      ->withCompanies($companies)
      ->withReviews($reviews)
      ->withAboutSection($aboutsection)
      ->withTips($tips);
  }


  public function companylist()
  {

    $companies = Company::orderByDesc('id')->whereFrontStatus(1)->whereStatus(1)->get();
    return view($this->viewPath . 'companylist')->withCompanies($companies);
  }


  public function companysingle($slug)
  {

    $company = Company::whereSlug($slug)->first();

    if ($company != null) {
      return view($this->viewPath . 'company')->withCompany($company);
    }
  }

  public function about()
  {

    $page = StaticPage::findOrFail(1);


    return view($this->viewPath . 'about')->withPage($page);
  }

  public function ourstory()
  {

    $page = StaticPage::findOrFail(2);

    return view($this->viewPath . 'ourstory')->withPage($page);
  }


  public function careers()
  {

    $page = StaticPage::findOrFail(3);
    return view($this->viewPath . 'career')->withPage($page);
  }


  public function privacy()
  {
    $page = StaticPage::findOrFail(4);
    return view($this->viewPath . 'privacy')->withPage($page);
  }

  public function whyUs()
  {
    $page = StaticPage::findOrFail(5);
    return view($this->viewPath . 'whyus')->withPage($page);
  }

  public function faqs()
  {
    return view($this->viewPath . 'faqs');
  }

  public function leadership()
  {

    $members =  Team::all();

    return view($this->viewPath . 'leadership')->withMembers($members);
  }


  public function contact()
  {
    return view($this->viewPath . 'contact');
  }








  public function news()
  {

    $blogs =  Post::orderBy('publish_date', 'desc')->where('publish_date', '!=', null)->where('publish', 1)->paginate(15);
    return view($this->viewPath . 'news')->withBlogs($blogs);
  }


  public function getsinglepost($slug)
  {

    $post = Post::where('slug', $slug)->first();

    if ($post != null) {

      $superid = $post->category_id;
      $id = $post->id;

      $featuredposts =  Post::inRandomOrder()->orderBy('publish_date', 'desc')->where('category_id', '=', $superid)->where('publish', 1)->where('publish_date', '!=', null)->where('id', '!=', $id)->take(10)->get();

      return view($this->viewPath . 'newsSingle')->withPost($post)->withFeaturedposts($featuredposts);
    } else {

      $message = 'Sorry The page you looking for is not available , either it may be removed or not even created yet';

      return view('inc_front.page.404')->withMessage($message);
    }
  }



  public function searchallpost()
  {

    $titleOrg = $_GET['title'];

    $title =  Str::slug($titleOrg, '-');

    $posts = Post::where('slug', 'LIKE', '%' . $title . '%')->orderBy('publish_date', 'desc')->where('publish', 1)->where('publish_date', '!=', null)->paginate(15);

    //   $pagname = Page::findOrFail(5);

    if ($posts->count() == 0) {

      $incategory =  Category::where('slug', 'LIKE', '%' . $title . '%')->first();

      if ($incategory != null) {


        $incategoryposts =  Category::findOrFail($incategory->id)->posts()->orderBy('publish_date', 'desc')->where('publish_date', '!=', null)->where('publish', 1)->paginate(15);

        return view('front.page.searchall')->withBlogs($incategoryposts)->withTitle($titleOrg);
      } else {
        if ($incategory == null) {

          $intag = Tag::where('slug', 'LIKE', '%' . $title . '%')->first();

          if ($intag != null) {
            $intagposts = Tag::findOrFail($intag->id)->posts()->orderBy('publish_date', 'desc')->where('publish', 1)->paginate(15);

            return view('front.page.searchall')->withBlogs($intagposts)->withTitle($titleOrg);
          }
        }
      }
    }
    return view('front.page.news')->withBlogs($posts)->withTitle($titleOrg);
  }

  public function getpostbytag($tag)
  {

    // $pagname = Page::findOrFail(5);
    $tagid = Tag::where('slug', $tag)->first();

    $posts = Tag::findOrFail($tagid->id)->posts()->orderBy('publish_date', 'desc')->where('publish_date', '!=', null)->where('publish', 1)->paginate(15);

    return view('front.page.news')->withBlogs($posts)->withTagname($tag);
  }

  public function getpostbycategory($slug)
  {

    $catid =  Category::where('slug', $slug)->first();
    // $pagname = Page::findOrFail(5);
    $posts = Category::findOrFail($catid->id)->posts()->orderBy('publish_date', 'desc')->where('publish_date', '!=', null)->where('publish', 1)->paginate(15);

    return view('front.page.news')->withBlogs($posts)->withSupername($catid->name);
  }

  public function policytiplist()
  {

    return view('front.page.policylist')->withTips(InsuranceTip::orderByDesc('id')->whereStatus(1)->get());
  }
  public function singletip($slug)
  {

    return view('front.page.singletip')->withTipDetail(InsuranceTip::whereSlug($slug)->whereStatus(1)->first());
  }
}
