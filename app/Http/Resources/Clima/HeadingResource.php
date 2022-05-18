<?php

namespace App\Http\Resources\Clima;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Clima\FactorResource;

class HeadingResource extends JsonResource {
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
      'factors' => FactorResource::collection($this->whenLoaded('factors'))
    ];
  }
}
