<?php

namespace App\Models\Clima;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model {
  public $timestamps = false;
  protected $connection = 'clima';
  protected $fillable = ['id', 'heading_id', 'name'];
}
