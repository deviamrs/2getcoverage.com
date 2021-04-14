<?php

namespace App\Http\Resources\Company;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => asset('public/'.$this->image),
            'status' => $this->status,
            'front_status' => $this->front_status,
            'front_details' => $this->front_details,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,


        ];
    }
}
