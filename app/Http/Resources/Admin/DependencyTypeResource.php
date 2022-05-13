<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Admin\DependencyResource;

class DependencyTypeResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'dependencies' => DependencyResource::collection($this->whenLoaded('dependencies')),
    ];
  }
}
