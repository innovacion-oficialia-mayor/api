<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PayrollTypesCategory extends Model {
  public $timestamps = false;
  protected $fillable = ['id', 'payroll_type_id', 'payroll_category_id'];
}
