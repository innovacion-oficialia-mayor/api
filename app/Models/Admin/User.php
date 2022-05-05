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
    'password', 'active',
  ];
}
