<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Hotel extends JsonResource
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
            'data'=>[
                'type'=>'hotel',
             'hotel_id'=>$this->id,
                'attributes'=>[
                    'name'=>$this->name,
                    'city'=>$this->city,
                    'num_rooms'=>$this->num_rooms,
                    'adress'=>$this->adress,
                    'nit'=>$this->nit,
                    
                              ]
              ]
                     
        ];
    }
}
