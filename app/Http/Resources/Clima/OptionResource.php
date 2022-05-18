<?php

namespace App\Http\Resources\Clima;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Clima\OptionResource;

class OptionResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'question_option_id' => $this->whenPivotLoaded('question_options', function () {
        return $this->pivot->id;
      }),
      'body' => $this->body
    ];
  }
}
