<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'phone' => $this->numero_telefono_usuario,
            'street' => $this->dir_calle,
            'whatever' => $this->buc_sglob_comp_hfin,
        ];
        
    }
}

