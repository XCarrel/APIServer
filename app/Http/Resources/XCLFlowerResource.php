<?php

namespace App\Http\Resources;

use App\XCLFlower;
use Illuminate\Http\Resources\Json\JsonResource;

class XCLFlowerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $flower = XCLFlower::find($this->id);
        return [
            'id' => $this->id,
            'names' => $flower->names,
            'size' => $this->size
        ];
    }
}
