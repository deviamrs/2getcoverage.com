<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyContentController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CompanyDetailController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Admin\EnquiryListController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\InsuranceTipController;
use App\Http\Controllers\Admin\InsuranceTypeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostDescriptionController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\StaticPgeController;
use App\Http\Controllers\Admin\StaticSectionController;
use App\Http\Controllers\Admin\TipContentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\VehicleInfoController;
use App\Http\Controllers\Admin\InsureCategoryController;
use App\Http\Controllers\Admin\InsuranceLeadsController;
use App\Http\Controllers\FrontControllerTwo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/' , [FrontController::class , 'homePage'])->name('front.home');

Route::get('/company-list' , [FrontController::class , 'companylist'])->name('front.companylist');

Route::get('/company/{slug}' , [FrontController::class , 'companysingle'])->name('front.companysingle');

Route::get('/about' , [FrontController::class , 'about'])->name('front.about');

Route::get('/our-story' , [FrontController::class , 'ourstory'])->name('front.ourstory');

Route::get('/leadership' , [FrontController::class , 'leadership'])->name('front.leadership');


Route::get('/contact' , [FrontController::class , 'contact'])->name('front.contact');

Route::get('/why-us' , [FrontController::class , 'whyUs'])->name('front.whyus');

Route::get('/faqs' , [FrontController::class , 'faqs'])->name('front.faqs');

Route::get('/privacy' , [FrontController::class , 'privacy'])->name('front.privacy');

Route::get('/careers' , [FrontController::class , 'careers'])->name('front.careers');

Route::get('/insurance-tips' , [FrontController::class , 'policytiplist'])->name('front.policytiplist');

Route::get('/insurance-tip/{slug}' , [FrontController::class , 'singletip'])->name('front.singletip');


// insurance related page routes

Route::get('/insurance/{insureCategory:slug}/{insuranceType:slug}' , [FrontControllerTwo::class , 'singleinsuranceType'])->name('front.singleinsuranceType');



Route::get('zipcode/{zipcode}/vehicle-info' , [VehicleInfoController::class , 'getVehicleInfo'] )->name('front.getVehicleInfo');
Route::post('store-insurance-lead' , [VehicleInfoController::class , 'storeInsuranceLead'] )->name('front.storeInsuranceLead');

Route::get('/privacy' , [FrontController::class , 'privacy'])->name('front.privacy');


Route::get('/news' , [FrontController::class , 'news'])->name('front.news');


Route::get('/tag/{id:name}/news/' , [FrontController::class , 'getpostbytag'] )->name('getpostbytag');
Route::get('/category/{id:name}/news/' , [FrontController::class , 'getpostbycategory'] )->name('getpostbycategory');

Route::get('/news/{id:slug}' , [FrontController::class , 'getsinglepost'])->name('getsinglepost');






Route::prefix('admin')->middleware(['auth'])->group(function () {
    
  

    Route::resource('/team', TeamController::class);
    Route::resource('/company', CompanyController::class);

    Route::resource('/company/{company}/companyProfile', CompanyProfileController::class);

    Route::resource('/company/{company}/companyDetailCard', CompanyDetailController::class);

    Route::resource('/company/{company}/companyContent', CompanyContentController::class);

    Route::resource('/staticPage', StaticPgeController::class);

    Route::resource('/staticSection', StaticSectionController::class);


    Route::resource('/insureCategory', InsureCategoryController::class);
   
    Route::resource('/insureCategory/{insureCategory}/insuranceType', InsuranceTypeController::class );

    
    Route::get('/enquiry-list' , EnquiryListController::class)->name('admin.enquiry.list') ;

        
    // post related route begins from here 

    Route::resource('/user', UserController::class);

    Route::get('/user/password/reset', [ UserController::class , 'passwordreset'])->name('back.pwd.rst');
 
    Route::put('/user/reset/{id}',  [UserController::class , 'passwordchange'])->name('password.change');
 
    Route::resource('/category', CategoryController::class);
    
 
    Route::resource('user', UserController::class , [ 'except' => [ 'edit' , 'update' , 'show'] ]);
 
    Route::get('user/makedmin/{id}' , [UserController::class , 'makeAdmin'])->name('user.makeadmin')->middleware('admin');
 
    Route::get('user/killdmin/{id}' , [UserController::class , 'killAdmin'])->name('user.killadmin')->middleware('admin');
 
    Route::get('profile' ,  [ProfileController::class  , 'index '])->name('profile');
 
    Route::get('profile/edit/{id}' ,  [ProfileController::class  , 'edit' ])->name('profile.edit');
 
    Route::put('profile/update/{id}' ,  [ProfileController::class  , 'updateuser' ])->name('profile.update');
 
     
    // blog post routes list here
 
    Route::resource('/post', PostController::class);
 
    Route::get('/posts/featured', [PostController::class , 'getfeatured' ]  )->name('post.featured');
 
    Route::get('/posts/getpublished', [PostController::class , 'getpublished' ]  )->name('post.getpublished');
 
    Route::get('/posts/getdraftPost', [PostController::class , 'getdraftPost' ]  )->name('post.getdraftPost');
 
    Route::get('/posts/{id}/byUser', [PostController::class , 'byUser' ]  )->name('post.byUser');
 
    Route::get('/posts/{id}/bytag', [PostController::class , 'bytag' ]  )->name('post.bytag');
 
    Route::get('/posts/bycategory/{id}', [PostController::class , 'bycategory' ]  )->name('post.bycategory');
 
    Route::get('post/setfeatured/{id}' , [PostController::class , 'setfeatured' ]  )->name('post.setfeatured');
 
    Route::get('post/setpublish/{id}' , [PostController::class , 'setpublish' ]  )->name('post.setpublish');
 
    Route::get('post/removepublish/{id}' , [PostController::class , 'removepublish' ]  )->name('post.removepublish');
 
    Route::get('post/removefeatured/{id}' , [PostController::class , 'removefeatured' ]  )->name('post.removefeatured');
    
    Route::resource('/tag', TagController::class);
 
    Route::resource('/post/{post}/postdescription', PostDescriptionController::class);

    // post related route ends from here\


    // review routers

    Route::resource('/review' , ReviewController::class);

    //  insurance tips routes

    Route::resource('/insuranceTip', InsuranceTipController::class);
    
    Route::resource('/insuranceTip/{insuranceTip}/tipContent' , TipContentController::class);
    
    
    // faq category Routes
    
    Route::resource('/faqCategory', FaqCategoryController::class);
    Route::resource('/faqCategory/{faqCategory}/faq', FaqController::class);
    // Insurance lead in admin side
    Route::resource('/insurancelead', InsuranceLeadsController::class);
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
