<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Dependency extends Model {
  public function type() {
    return $this->belongsTo(DependencyType::class, 'dependency_type_id');
  }

  public function areas() {
    return $this->belongsToMany(Area::class, 'dependency_areas')
                ->withPivot('id');
  }
}
