<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PBNAssetResource extends JsonResource
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
            'model' => $this->model,
            'location' => $this->location,
            'type' => $this->type_id,
            'status' => $this->status_id
        ];
    }
}
