<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
  public    $incrementing = false;
  protected $keyType  = 'string';
  protected $fillable = [
    'id', 'payroll', 'email', 'role_id',
    'gender_id', 'job_id', 'job_level_id',
    'payroll_type_category_id', 'dependency_area_id',
    'name', 'firstsurname', 'secondsurname', 'phone',
    'password', 'active', 'entered_at',
  ];

  public function role() {
    return $this->belongsTo(Role::class);
  }

  public function gender() {
    return $this->belongsTo(Gender::class);
  }

  public function job() {
    return $this->belongsTo(Job::class);
  }

  public function jobLevel() {
    return $this->belongsTo(JobLevel::class);
  }

  public function payrollTypeCategory() {
    return $this->belongsTo(PayrollTypesCategory::class);
  }

  public function dependencyArea() {
    return $this->belongsTo(DependencyArea::class);
  }
}
