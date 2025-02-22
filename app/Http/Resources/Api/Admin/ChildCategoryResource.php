<?php

namespace App\Http\Resources\Api\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildCategoryResource extends JsonResource
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
            'status' => $this->status,
            'sub_category' => [
                'id' => $this->sub_category_id,
                'name' => $this->rel_to_subcategory?->name,
            ],
            'category' => [
                'id' => $this->rel_to_subcategory?->category_id,
                'name' => $this->rel_to_subcategory?->rel_to_category?->name,
            ],
        ];
    }
}
