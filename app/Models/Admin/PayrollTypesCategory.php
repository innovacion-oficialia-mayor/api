<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PayrollTypesCategory extends Model {
  public $timestamps = false;
  protected $fillable = ['id', 'payroll_type_id', 'payroll_category_id'];

  public function type(){
    return $this->belongsTo(PayrollType::class, 'payroll_type_id');
  }

  public function category(){
    return $this->belongsTo(PayrollCategory::class, 'payroll_category_id');
  }
}
