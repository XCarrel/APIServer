<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QNSWineResource extends JsonResource
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
            'country' => $this->country,
            'vineyard' => $this->vineyard,
            'year' => $this->year,
            'dateAdded' => $this->dateAdded,
            'numberOfBottle' => $this->numberOfBottle
        ];
    }
}
