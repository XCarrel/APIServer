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
            'ishere' => $this->ishere,
            'fingerPrintHash' => $this->fingerPrintHash,
            'role' => $this->role()->get()->first()->name,
            'friends' => [
                'name' => "Ami",
                'surname' => "DeToutLeMonde",
                'ishere' => true,
                'fingerPrintHash' => "AMasdasd=",
                'role' => "user",
            ]
        ];
    }
}
