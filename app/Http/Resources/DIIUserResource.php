<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DIIUserResource extends JsonResource
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
            'surname' => $this->surname,
            'fingerprint' => $this->fingerPrintHash
        ];
    }
}
