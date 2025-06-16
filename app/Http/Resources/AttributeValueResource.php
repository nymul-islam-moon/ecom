<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttributeValueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'attribute' => [
                'id' => $this->attribute_id,
                // 'id' => $this->rel_to_attribute?->id,
                'name' => $this->attributes_name,
                // 'name' => $this->rel_to_attribute?->name,
            ],
        ];
    }
}
