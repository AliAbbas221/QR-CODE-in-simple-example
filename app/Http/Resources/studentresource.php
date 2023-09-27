<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class studentresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'course_name'=>$this->courses->pluck('name'),
        ];
    }
}
