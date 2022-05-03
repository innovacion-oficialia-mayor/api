<?php

namespace App\Http\Resources\Clima;

use Illuminate\Http\Resources\Json\JsonResource;

class OptionResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id'   => $this->id,
      'body' => $this->body,
      'link' => route('clima.options.show', ['id' => $this->id]),
    ];
  }
}
