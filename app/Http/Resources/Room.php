<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Room extends JsonResource
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
           'type'=>'room',
        'room_id'=>$this->id,
           'attributes'=>[
              'amount'=>$this->amount,
                'type_room'=>$this->type_room,
                'accommodation'=>$this->accommodation,

                'hotel_id'=>new Hotel($this->hotel),
              
                         ]
         ]
                
                
                ];
    }
}
