<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DependencyArea extends Model {
  public function dependency() {
    return $this->belongsTo(Dependency::class);
  }

  public function area() {
    return $this->belongsTo(Area::class);
  }
}
