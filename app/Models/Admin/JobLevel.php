<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class JobLevel extends Model {
  public $timestamps = false;
  protected $fillable = ['id', 'name'];
}
