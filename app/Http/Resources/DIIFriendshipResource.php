<?php

namespace App\Http\Resources;

use App\DIIFriendship;
use App\DIIUser;
use Illuminate\Http\Resources\Json\JsonResource;

class DIIFriendshipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        $user = ($this->user()->first()->id === $request->route()->parameter('user')->id) ? $this->user2()->first() : $this->user()->first();

        return [
            'id' => $user->id,
            'name' => $user->name,
            'surname' => $user->surname,
            'ishere' => $user->ishere,
            'fingerPrintHash' => $user->fingerPrintHash,
            'role' => $user->role()->get()->first()->name,
            'ishere_changed_at' => $user->updated_at,
            'subscribed_since' => $this->created_at,
        ];
    }
}
