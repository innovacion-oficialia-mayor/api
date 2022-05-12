<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Admin\DependencyResource;
use App\Http\Resources\Admin\AreaResource; 

class DependencyAreaResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'dependency' => new DependencyResource($this->whenLoaded('dependency')),
      'area' => new AreaResource($this->whenLoaded('area')),
    ];
  }
}
