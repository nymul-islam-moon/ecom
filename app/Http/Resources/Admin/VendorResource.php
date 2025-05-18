<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Services\FileUpload;

class VendorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Instantiate the service (manual since resources aren't resolved via service container)
        $fileUpload = new FileUpload(app('filesystem'));

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'description' => $this->description,
            'status' => $this->status,
            'company_name' => $this->company_name,
            'commission' => $this->commission,
            'business_license_number' => $this->business_license_number,
            'cover_image' => $this->cover_image
                ? $fileUpload->url($this->cover_image)
                : null,
            'logo' => $this->logo
                ? $fileUpload->url($this->logo)
                : null,
        ];
    }
}
