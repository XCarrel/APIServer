<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SJMRecipeResource extends JsonResource
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
            'picture' => $this->picture,
            'calories' => $this->calories,
            'time' => $this->time,
            'tutorial' => $this->tutorial,
            'ingredients' => $this->ingredients
        ];
    }
}
