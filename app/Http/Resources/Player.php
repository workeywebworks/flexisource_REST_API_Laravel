<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Player extends JsonResource
{
    
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
           'id'=>$this->id,
           'first_name'=>$this->first_name,
           'second_name'=>$this->second_name,
           /*'form'=>$this->form,
           'total_points'=>$this->total_points,
           'influence'=>$this->influence,
           'creativity'=>$this->creativity,
           'threat'=>$this->theat,
           'ict_index'=>$this->ict_index*/
           
       ];
    }
 
    public function with($request){
        return [
            'author'=>'Job Ferera',
            'email'=>'jobferrera17@gmail.com'
        ];
    }
}
