<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {
  public $timestamps = false;
  protected $fillable = ['id', 'name'];
}
