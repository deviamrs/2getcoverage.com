<?php

namespace App\Http\Resources\Blog;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
              
            'id' => $this->id,
            'title' => $this->title,
            'user_name' => $this->user->name,
            'image' => asset('public/'.$this->image),
            'category_name' => $this->category->name,
            'slug' => $this->slug,
            'post_page_title' => $this->post_title,
            'small_desc' => $this->small_desc,
            'post_descriptions' => BlogDescriptionResource::collection($this->postdescriptions),
            'post_meta_title' => $this->post_meta_title,
            'post_alt_image' => $this->post_alt_image,
            'published_date' => Carbon::parse($this->publish_date)->format('d M Y'),
             'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,


        ];
    }
}
