<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Admin\RoleResource;
use App\Http\Resources\Admin\GenderResource;
use App\Http\Resources\Admin\JobResource;
use App\Http\Resources\Admin\JobLevelResource;
use App\Http\Resources\Admin\PayrollTypesCategoryResource;
use App\Http\Resources\Admin\DependencyAreaResource;

class UserResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'fullname' => $this->fullname,
      'payroll' => $this->payroll,
      'phone' => $this->phone,
      'email'  => $this->email,
      'role'   => new RoleResource($this->whenLoaded('role')),
      'gender' => new GenderResource($this->whenLoaded('gender')),
      'job'    => new JobResource($this->whenLoaded('job')),
      'job_level' => new JobLevelResource($this->whenLoaded('jobLevel')),
      'payroll_type_category' => new PayrollTypesCategoryResource($this->whenLoaded('payrollTypeCategory')),
      'dependency_area' => new DependencyAreaResource($this->whenLoaded('dependencyArea')),
      'active' => $this->active,
      'entered_at' => $this->entered_at,
      'created_at' => $this->created_at,
      'updated_at' => $this->updated_at,
    ];
  }
}
