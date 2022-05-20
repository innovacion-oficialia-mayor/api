<?php

namespace App;

class Helpers {
  public static function trim(string $str) {
    return trim(preg_replace('/\s+/', ' ', $str));
  }
}
