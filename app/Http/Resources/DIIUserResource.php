<?php

namespace App\Http\Resources;

use App\DIIFriendship;
use App\DIIUser;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class DIIUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
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
            'ishere_changed_at' => $this->updated_at,
            'subscribed_since' => $this->created_at,
            'friends' => DIIFriendshipResource::collection($this->friendship()->get())
        ];
    }
}
