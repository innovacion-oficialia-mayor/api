<?php

namespace App\Http\Resources\Clima;

use Illuminate\Http\Resources\Json\JsonResource;

class SurveyResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'percentage_users' => $this->percentage_users,
      'started_at'  => $this->started_at,
      'finished_at' => $this->finished_at,
      'active' => $this->active,
      'created_at' => $this->created_at,
      'updated_at' => $this->updated_at,
    ];
  }
}
