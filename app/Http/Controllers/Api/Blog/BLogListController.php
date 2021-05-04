<?php

namespace App\Http\Controllers\Api\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\BlogListResource;
use App\Models\Post;
use Illuminate\Http\Request;

class BLogListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

        return BlogListResource::collection(Post::orderBy('publish_date' , 'desc')->where('publish_date' , '!=' , null)->where('publish' , 1)->get());
    }
}
