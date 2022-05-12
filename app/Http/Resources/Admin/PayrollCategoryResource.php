<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Admin\PayrollTypeResource;

class PayrollCategoryResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'payroll_type_category_id' => $this->whenPivotLoaded('payroll_types_categories', function () {
        return $this->pivot->id;
      }),
      'name'  => $this->name,
      'types' => PayrollTypeResource::collection($this->whenLoaded('types')),
    ];
  }
}
