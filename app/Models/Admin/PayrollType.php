<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PayrollType extends Model {
  public function categories() {
    return $this->belongsToMany(PayrollCategory::class, 'payroll_types_categories')
                ->withPivot('id');
  }
}
