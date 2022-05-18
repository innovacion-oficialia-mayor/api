<?php

namespace App\Models\Clima;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {
  public $timestamps = false;
  protected $connection = 'clima';
  protected $fillable = ['id', 'body'];
}
