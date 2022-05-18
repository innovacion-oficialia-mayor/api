<?php

namespace App\Models\Clima;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model {
  public $timestamps = false;
  protected $connection = 'clima';
  protected $fillable = ['id', 'heading_id', 'name'];

  public function heading() {
    return $this->belongsTo(Heading::class);
  }

  public function questions() {
    return $this->hasMany(Question::class);
  }
}
