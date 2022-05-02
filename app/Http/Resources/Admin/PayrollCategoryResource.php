<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class PayrollCategoryResource extends JsonResource {
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
      'link' => route('admin.payrolls.categories.show', ['id' => $this->id]),
    ];
  }
}
