<?php

namespace App\Http\Resources\Clima;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Clima\QuestionResource;
use App\Http\Resources\Clima\OptionResource;

class QuestionOptionResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'question' => new QuestionResource($this->whenLoaded('question')),
      'option' => new OptionResource($this->whenLoaded('option')),
    ];
  }
}
