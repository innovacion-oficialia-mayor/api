<?php

namespace App\Models\Admin;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject {
  use Authenticatable, Authorizable, HasFactory;

  public    $incrementing = false;
  protected $keyType  = 'string';
  protected $fillable = [
    'id', 'payroll', 'email', 'role_id',
    'gender_id', 'job_id', 'job_level_id',
    'payroll_type_category_id', 'dependency_area_id',
    'name', 'firstsurname', 'secondsurname', 'phone',
    'password', 'active', 'entered_at',
  ];

  protected $hidden = ['password'];

  /**
   * Get the identifier that will be stored in the subject claim of the JWT.
   *
   * @return mixed
   */
  public function getJWTIdentifier() {
    return $this->getKey();
  }

  /**
   * Return a key value array, containing any custom claims to be added to the JWT.
   *
   * @return array
   */
  public function getJWTCustomClaims() {
    return [];
  }

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
