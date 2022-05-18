<?php

namespace App\Http\Resources\Clima;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Clima\HeadingResource;
use App\Http\Resources\Clima\FactorResource;
use App\Http\Resources\Clima\OptionResource;

class QuestionResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'body' => $this->body,
      'factor' => new FactorResource($this->whenLoaded('factor')),
      'options' => OptionResource::collection($this->whenLoaded('options'))
    ];
  }
}
