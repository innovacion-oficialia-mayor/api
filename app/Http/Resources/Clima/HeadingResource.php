<?php

namespace App\Http\Resources\Clima;

use Illuminate\Http\Resources\Json\JsonResource;

class HeadingResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id'   => $this->id,
      'name' => $this->name,
      'link' => route('clima.headings.show', ['id' => $this->id]),
    ];
  }
}
