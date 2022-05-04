<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Admin\AreaResource;

class DependencyResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id'    => $this->id,
      'pivot' => $this->whenPivotLoaded('dependency_areas', function () {
        return $this->pivot->id;
      }),
      'name'  => $this->name,
      'areas' => AreaResource::collection($this->whenLoaded('areas')),
    ];
  }
}
