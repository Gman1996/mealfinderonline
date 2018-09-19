<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FinderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return parent::toArray($request);
//        return [
//          'uuid' => $this->uuid,
//          'bookmarks' => $this->bookmarks,
//          'orders' => $this->orders,
//        ];
    }
}
