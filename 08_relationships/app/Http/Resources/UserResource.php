<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'email' => $this->email,
            // *Cuando es la relación 1 a 1 
            // 'phone' => '(' . $this->phone->prefix . ')' . $this->phone->phone_number,
            // *Cuando es de 1 a muchos
            'phones' => $this->phones->map(function ($phone) {
                return '+' . $phone->prefix . ' ' . $phone->phone_number;
            }),
            'roles' => $this->roles,
        ];
    }
}
