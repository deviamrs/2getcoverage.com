<?php

namespace App\Http\Resources\Blog;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogDescriptionResource extends JsonResource
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
           
            'video_url' => $this->video_url,
            'additional_image' => asset('public/'.$this->additional_image),
            'image_alt' => $this->description_alt_image,
            'additional_text' => $this->additional_text,


        ];
    }
}
