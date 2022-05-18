<?php

namespace App\Models\Clima;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {
  public $timestamps = false;
  protected $connection = 'clima';
  protected $fillable = ['id', 'factor_id', 'body'];
}
