<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PayrollCategory extends Model {
  public $timestamps = false;
  protected $fillable = ['id', 'name'];
}
