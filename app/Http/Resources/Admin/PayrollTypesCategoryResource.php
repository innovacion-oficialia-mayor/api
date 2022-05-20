<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Admin\PayrollTypeResource;
use App\Http\Resources\Admin\PayrollCategoryResource;

class PayrollTypesCategoryResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'type' => new PayrollTypeResource($this->whenLoaded('type')),
      'category' => new PayrollCategoryResource($this->whenLoaded('category')),
    ];
  }
}
