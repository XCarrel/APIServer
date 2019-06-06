<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DIIFriendshipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        dd($this->resource->user1());
//        return [
//            'name' => $this->->name,
//            'surname' => $this->surname,
//            'ishere' => $this->ishere,
//            'fingerPrintHash' => $this->fingerPrintHash,
////            'role' => $this->role()->get()->first()->name,
//        ];
    }
}
