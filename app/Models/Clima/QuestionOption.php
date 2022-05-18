<?php

namespace App\Models\Clima;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model {
  public $timestamps = false;
  protected $connection = 'clima';
  protected $fillable = ['id', 'question_id', 'option_id'];
}
