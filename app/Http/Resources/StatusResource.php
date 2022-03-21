<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StatusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // $status_id = $this->whenLoaded('carehomes');
        return [
            // 'id' => $this->id,
            'name' => $this->status_name,
            // 'carehomes' => new CarehomeResource($status_id),
        ];
    }
}
