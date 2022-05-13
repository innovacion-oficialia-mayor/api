<?php

namespace App\Models\Clima;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {
  public $incrementing = false;
  protected $connection = 'clima';
  protected $keyType  = 'string';
  protected $fillable = ['id', 'percentage_users', 'started_at', 'finished_at', 'active'];
  protected $attributes = ['active' => false];
}
