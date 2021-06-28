<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Company;
use App\Models\ContactFormDetail;
use App\Models\FaqCategory;
use App\Models\InsuranceTip;
use App\Models\InsureCategory;
use App\Models\Post;
use App\Models\Review;
use App\Models\Tag;
use App\Models\Team;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('front.partials.footer', function ($view) {

            $view->withInsureCategories( InsureCategory::whereStatus(1)->get());
        });  

    }
}
