<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PayrollCategory extends Model {
  public $timestamps = false;
  protected $fillable = ['id', 'name'];

  public function types() {
    return $this->belongsToMany(PayrollType::class, 'payroll_types_categories')
                ->withPivot('id');
  }
}
