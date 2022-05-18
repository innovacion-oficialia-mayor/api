<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model {
  public $timestamps = false;
  protected $fillable = ['id', 'name'];
}
