<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarehomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'patients' => $this->total_patients,
            'week' => $this->week,
            // 'status' => StatusResource::collection($this->whenLoaded('status')), // only if expecting collection result
            'status' => new StatusResource($this->whenLoaded('status')),
        ];
    }
}
