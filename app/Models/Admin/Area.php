<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {
  public function dependencies() {
    return $this->belongsToMany(Dependency::class, 'dependency_areas')
                ->withPivot('id');
  }
}
