<?php

namespace App\Http\Resources\Clima;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Clima\HeadingResource;
use App\Http\Resources\Clima\QuestionResource;

class FactorResource extends JsonResource {
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
      'heading' => new HeadingResource($this->whenLoaded('heading')),
      'questions' => QuestionResource::collection($this->whenLoaded('questions')),
    ];
  }
}
