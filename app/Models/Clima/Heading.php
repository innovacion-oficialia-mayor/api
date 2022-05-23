<?php

namespace App\Models\Clima;

use Illuminate\Database\Eloquent\Model;

class Heading extends Model {
  public $timestamps = false;
  protected $connection = 'clima';
  protected $fillable = ['id', 'name'];
}
